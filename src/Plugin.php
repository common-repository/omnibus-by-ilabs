<?php

namespace Ilabs\Omnibus_By_Ilabs;

use Exception;
use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Abstract_Ilabs_Plugin;
use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Alerts;
use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Interfaces\Wc_Product_Aware_Interface;
use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Interfaces\Wc_Variation_Aware_Interface;
use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Interfaces\Wp_Post_Id_Aware_Interface;
use WC_Product;
use WC_Product_Variation;

defined( 'ABSPATH' ) || exit;

class Plugin extends Abstract_Ilabs_Plugin {

	/**
	 * @var string
	 */
	private static $option_show_on_listing_key;

	/**
	 * @throws Exception
	 */
	protected function before_init() {

		$this->implement_omnibus();
	}

	protected function plugins_loaded_hooks() {
		$this->init_settings();
	}

	/**
	 * @throws Exception
	 */
	private function init_settings() {
		$settings_form = omnibus_by_ilabs()->get_form_builder();

		$settings_form
			->begin_group( 'main', __( 'Settings', 'omnibus-by-ilabs' ) )
			->add_field_checkbox( 'show_on_listing',
				__( 'Show omnibus note on product listings',
					'omnibus-by-ilabs' ) );
		$show_on_listing_checkbox         = $settings_form->get_current_field();
		self::$option_show_on_listing_key = $show_on_listing_checkbox->get_id();

		$settings_form
			->close_group();
		$settings_form = $settings_form->build();

		$settings_feature = omnibus_by_ilabs()->get_event_chain();
		$settings_feature
			->on_wp_init()
			->action_render_wc_general_settings(
				$settings_form,
				$this->get_from_config( 'slug' ) . '_general_settings',
				__( 'Omnibus by iLabs', 'omnibus-by-ilabs' )
			)
			->execute();

	}

	/**
	 * @throws Exception
	 */
	public function enqueue_frontend_scripts() {
		wp_enqueue_style( $this->get_plugin_prefix() . '_front_css',
			$this->get_plugin_css_url() . '/front.css'
		);
	}

	/**
	 * @throws Exception
	 */
	public function enqueue_dashboard_scripts() {
		wp_enqueue_style( $this->get_plugin_prefix() . '_admin_css',
			$this->get_plugin_css_url() . '/admin.css'
		);
	}

	public function init() {
		( new Hooks() )->init();
	}

	/**
	 * @return void
	 * @throws Exception
	 */
	private function implement_omnibus() {

		$omnibus         = omnibus_by_ilabs()->get_event_chain();
		$debug_cache     = $omnibus->get_wp_options_based_cache( 'debug', 10 );
		$product_service = new Product_Service();

		$omnibus
			->on_wc_product_update()
			->action( function ( Wc_Product_Aware_Interface $product_aware ) use
			(
				$debug_cache,
				$product_service
			) {
				if ( $product_aware instanceof WC_Product_Variation ) {
					return;
				}
				get_woocommerce_currency();
				$product_id = $product_aware->get_product()->get_id();
				$product_service->handle_product_update( $product_id,
					$debug_cache );
			} )
			->on_wc_variation_update()
			->action( function ( Wc_Variation_Aware_Interface $product_aware
			) use (
				$debug_cache,
				$product_service
			) {
				$product_id = $product_aware->get_variation()->get_id();
				$product_service->handle_product_update( $product_id,
					$debug_cache );
			} )
			->on_wp_init()
			->action( function () use ( $debug_cache ) {
				if ( $debug_cache->get() && defined( 'ILABS_DEBUG' ) ) {
					( new Alerts() )->add_notice( "Omnibus by iLabs is running in debug mode" );
					foreach ( $debug_cache->get() as $k => $message ) {
						( new Alerts() )->add_notice( "Omnibus by iLabs log: $message" );
					}
				}
			} )
			->on_wc_product_options_pricing()
			->action( function ( Wp_Post_Id_Aware_Interface $post_id_aware ) {
				$product = wc_get_product( $post_id_aware->get_post_id() );
				if ( ! $product->is_on_sale() ) {

					return;
				}

				$post_id          = $post_id_aware->get_post_id();
				$price_repository = new Lowest_Price_Cache_Post_Meta_Repository();
				$omnibus_price    = $price_repository->get( $post_id );

				if ( $omnibus_price ) {
					woocommerce_wp_text_input(
						[
							'id'                => $this->add_slug_prefix( 'omnibus_price' ),
							'label'             => __( 'Omnibus Price',
								'omnibus-by-ilabs' ),
							'value'             => $omnibus_price->get_price(),
							'class'             => 'ilabs-disabled-input disabled',
							'custom_attributes' => 'disabled',

						]
					);

					woocommerce_wp_text_input(
						[
							'id'    => $this->add_slug_prefix( 'omnibus_date' ),
							'label' => __( 'Omnibus Date', 'omnibus-by-ilabs' ),
							'value' => $omnibus_price->get_date_time()
							                         ->format( 'Y-m-d H:i:s' ),
							'class' => 'ilabs-disabled-input disabled',
						]
					);
				}
			} )
			->execute();
	}

	public function output_product_note_html(
		WC_Product $product,
		bool $only_on_single = true
	) {
		if ( ! $product->is_on_sale() ) {
			return;
		}
		$price_note_template_service   = new Price_Note_Template_Service();
		$lowest_Price_Cache_Repository = new Lowest_Price_Cache_Post_Meta_Repository();
		$lowest_price                  = $lowest_Price_Cache_Repository
			->get( $product->get_id() );

		if ( $only_on_single && ! is_product() ) {
			return;
		}

		if ( $lowest_price instanceof Price_Model ) {
			if ( $lowest_Price_Cache_Repository->is_price_outdated( $lowest_price ) ) {
				return;
			}
			$price_note_template_service->output_product_note_html( $lowest_price->get_price(),
				$product );
		} else {
			$price_note_template_service->output_product_note_html(
				$product->get_regular_price( 'false' ), $product );
		}
	}

	public function format_omnibus_price(
		float $price,
		WC_Product $product
	): string {
		return wc_price( wc_get_price_to_display( $product,
			[ 'price' => $price ] ) );
	}

	/**
	 * @return string
	 */
	public function get_option_show_on_listing_key(): string {
		return self::$option_show_on_listing_key;
	}
}
