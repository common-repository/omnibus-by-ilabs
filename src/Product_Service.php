<?php

namespace Ilabs\Omnibus_By_Ilabs;

use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Wp_Options_Based_Cache;

class Product_Service {

	static $prevent_duplicates = [];

	public function handle_product_update(
		int $product_id,
		Wp_Options_Based_Cache &$debug
	) {
		if ( in_array( $product_id, self::$prevent_duplicates ) ) {
			return;
		}

		$product = wc_get_product( $product_id );

		$current_price_float = (float) $product->get_price( 'false' );
		if ( false === $current_price_float > 0 ) {
			return;
		}

		$current_price = ( new Price_Model_Factory() )
			->create(
				[
					Price_Model::ARRAY_PRICE_KEY_0      => $current_price_float,
					Price_Model::ARRAY_DATETIME_KEY_1   => date( 'Y-m-d H:i:s' ),
					Price_Model::ARRAY_IS_ON_SALE_KEY_2 => $product->is_on_sale(),
				] );

		$price_repository = new Price_Post_Meta_Repository();

		if ( $this->should_recalculate_lowest_price( $current_price,
			$product_id ) ) {

			$lowest_Price_Cache_Repository = new Lowest_Price_Cache_Post_Meta_Repository();
			$new_lowest_price              = $price_repository->get_lowest_price( $product_id,
				$current_price->get_date_time() );
			$new_lowest_price_float        = $new_lowest_price->get_price();
			$lowest_Price_Cache_Repository->update( $new_lowest_price,
				$product_id );
			$debug->push( "Rekalkulacja. Zapisana cena: $current_price_float. Cena Omnibus: $new_lowest_price_float. Product ID: $product_id." );
		} else {
			$current_price_float = $current_price->get_price();
			$debug->push( "Brak rekalkulacji. Zapisana cena: $current_price_float. Product ID: $product_id." );
		}


		$price_repository->push( $current_price, $product_id );
		self::$prevent_duplicates[] = $product_id;
	}

	private function should_recalculate_lowest_price(
		Price_Model $price,
		int $product_id
	): bool {
		$price_repository = new Price_Post_Meta_Repository();
		$last_price       = $price_repository->get_last_price( $product_id );

		if ( ! $last_price ) {
			return false;
		}

		return $price->get_is_on_sale() && $price->get_price() !== $last_price->get_price();
	}

	private function check_real_discount(
		Price_Model $price,
		int $product_id
	): ?bool {
		$price_repository = new Price_Post_Meta_Repository();

		return $price_repository->is_price_lower_than_last_price( $price,
			$product_id );
	}


}