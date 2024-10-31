<?php

namespace Ilabs\Omnibus_By_Ilabs;

use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Alerts;

class Product_Integrity {

	public function get_post_meta_key(): string {
		return omnibus_by_ilabs()->add_slug_prefix( 'origin_product' );
	}

	public function handle_check_integrity( int $product_id ) {
		$meta_value = get_post_meta( $product_id, $this->get_post_meta_key(), true );
		if ( empty( $meta_value ) ) {
			$this->init_integrity_control( $product_id );
			if ( defined( 'ILABS_DEBUG' ) ) {
				$a = new Alerts();
				$a->add_notice( sprintf( "Omnibus by iLabs log: init_integrity_control for product ID: %d",
					$product_id ), rand( 1, 10000 ) );
				$a->print_alerts();
			}

			return;
		}

		if ( (int) $meta_value !== $product_id ) {
			{
				$a = new Alerts();
				$a->add_notice( sprintf( "Omnibus by iLabs log: remove_omnibus_metadata for product ID: %d",
					$product_id ), rand( 1, 10000 ) );
				$a->print_alerts();


				$this->remove_omnibus_metadata( $product_id );

				return;
			}
		}

		$a = new Alerts();
		$a->add_notice( sprintf( "Omnibus by iLabs log: check_integrity for product ID: %d OK",
			$product_id ), rand( 1, 10000 ) );
		$a->print_alerts();


	}

	public function remove_omnibus_metadata( int $product_id ) {
		delete_post_meta( $product_id, $this->get_post_meta_key() );
		delete_post_meta( $product_id, ( new Price_Post_Meta_Repository() )->get_post_meta_key() );
		delete_post_meta( $product_id, ( new Lowest_Price_Cache_Post_Meta_Repository() )->get_post_meta_key() );
	}

	public function init_integrity_control( int $product_id ) {
		update_post_meta( $product_id, $this->get_post_meta_key(), $product_id );
	}

}