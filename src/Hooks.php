<?php

namespace Ilabs\Omnibus_By_Ilabs;

use WC_Product;
use WC_Product_Grouped;
use WC_Product_Variable;
use WC_Product_Variation;
use WP_Post;

class Hooks {

	public function init() {
		add_filter( 'woocommerce_grouped_product_columns',
			[ $this, 'filter_grouped_product_columns' ], 10, 2 );
		add_action( 'woocommerce_grouped_product_list_after_omnibus',
			[ $this, 'filter_grouped_product_child' ], 10,
			1 );
		add_action( 'woocommerce_single_product_summary',
			[ $this, 'single_product_summary' ], 11, 1 );
		add_action( 'woocommerce_get_price_html', [
			$this,
			'woocommerce_get_variation_price_html',
		], 10, 2 );
		add_action( 'woocommerce_variation_options_pricing',
			[ $this, 'woocommerce_variation_options_pricing' ], 10,
			3 );

		add_action( 'woocommerce_after_shop_loop_item_title',
			[ $this, 'after_shop_loop_item_title' ], 10,
			3 );
	}

	public function filter_grouped_product_columns(
		array $columns,
		WC_Product $product
	) {
		$columns[] = 'omnibus';

		return $columns;
	}

	public function filter_grouped_product_child( WC_Product $product ) {
		if ( $product->is_on_sale() && ! apply_filters( omnibus_by_ilabs()->add_slug_prefix( 'disable_message' ),
				false,
				$product ) ) {
			echo '<tr><td>';
			omnibus_by_ilabs()->output_product_note_html( $product );
			echo '</td></tr>';
		}
	}

	public function single_product_summary() {
		$product = wc_get_product();

		if ( ! $product instanceof WC_Product_Variable
		     && ! $product instanceof WC_Product_Grouped ) {
			if ( ! apply_filters( omnibus_by_ilabs()->add_slug_prefix( 'disable_message' ),
				false, $product ) ) {
				omnibus_by_ilabs()->output_product_note_html( $product );
			}
		}
	}

	public function woocommerce_get_variation_price_html(
		string $price,
		WC_Product $product
	): string {
		$original_price_html = $price;
		if ( ! $product->is_on_sale()
		     || ! $product instanceof WC_Product_Variation ) {

			return $original_price_html;
		}

		if ( apply_filters( omnibus_by_ilabs()->add_slug_prefix( 'disable_message' ),
			false, $product ) ) {
			return $original_price_html;
		}

		$price_note_template_service = new Price_Note_Template_Service();
		$currency                    = get_woocommerce_currency_symbol();

		$lowest_Price_Cache_Repository = new Lowest_Price_Cache_Post_Meta_Repository();
		$lowest_price                  = $lowest_Price_Cache_Repository
			->get( $product->get_id() );

		if ( ! is_product() ) {
			return $original_price_html;
		}

		if ( $lowest_price instanceof Price_Model ) {
			if ( $lowest_Price_Cache_Repository->is_price_outdated( $lowest_price ) ) {
				return $original_price_html;
			}

			return sprintf( "%s<span class='omnibus-by-ilabs-price-note'><br>%s</span>"
				, $original_price_html,
				$price_note_template_service->get_product_note_html( $lowest_price->get_price(),
					$product ) );
		} else {
			return sprintf( "%s<span class='omnibus-by-ilabs-price-note'><br>%s</span>"
				, $original_price_html,
				$price_note_template_service->get_product_note_html(
					$product->get_regular_price( 'false' ),
					$product ) );
		}
	}

	public function woocommerce_variation_options_pricing(
		$loop,
		$variation_data,
		WP_Post $variation_post
	) {
		$product = wc_get_product( $variation_post->ID );
		if ( ! $product->is_on_sale()
		     || ! $product instanceof WC_Product_Variation ) {

			return;
		}

		$price_repository = new Lowest_Price_Cache_Post_Meta_Repository();
		$omnibus_price    = $price_repository->get( $variation_post->ID );

		if ( $omnibus_price ) {
			woocommerce_wp_text_input(
				[
					'id'                => omnibus_by_ilabs()->add_slug_prefix( 'omnibus_price' ),
					'label'             => __( 'Omnibus Price',
						'omnibus-by-ilabs' ),
					'value'             => $omnibus_price->get_price(),
					'class'             => 'ilabs-disabled-input disabled',
					'custom_attributes' => 'disabled',

				]
			);

			woocommerce_wp_text_input(
				[
					'id'    => omnibus_by_ilabs()->add_slug_prefix( 'omnibus_date' ),
					'label' => __( 'Omnibus Date', 'omnibus-by-ilabs' ),
					'value' => $omnibus_price->get_date_time()
					                         ->format( 'Y-m-d H:i:s' ),
					'class' => 'ilabs-disabled-input disabled',
				]
			);
		}
	}

	public function after_shop_loop_item_title() {

		if ( get_option( omnibus_by_ilabs()->get_option_show_on_listing_key(),
				'no' ) !== 'yes' ) {
			return;
		}

		global $product;

		if ( false === $product instanceof WC_Product ) {
			return;
		}

		if ( ! $product instanceof WC_Product_Variable ) {
			omnibus_by_ilabs()->output_product_note_html( $product, false );
		}
	}
}
