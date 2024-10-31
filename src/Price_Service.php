<?php

namespace Ilabs\Omnibus_By_Ilabs;

use DateInterval;
use DateTime;
use Exception;

class Price_Service {

	/**
	 * @throws Exception
	 */
	public function find_lowest_price_before_discount( array $prices, DateTime $discount_date ): ?Price_Model {

		if ( empty( $prices ) ) {
			return null;
		}
		$interval = new DateInterval( 'P30D' );
		//var_dump($discount_date->format( 'Y-m-d H:i:s' ));

		$discount_date_minus_30_days = new DateTime();
		$discount_date_minus_30_days->setTimestamp($discount_date->getTimestamp());
		//var_dump($discount_date->getTimestamp());die;
		$discount_date_minus_30_days->sub( $interval );

		//var_dump($discount_date_minus_30_days->format( 'Y-m-d H:i:s' ));die;
		//var_dump($discount_date > $discount_date_minus_30_days);die;
		$prices = array_reverse( $prices );

		$lowest_price_obj = ( new Price_Model_Factory() )->create( $prices[0] );
		foreach ( $prices as $k => $row ) {
			if ( 0 === $k ) {
				continue;
			}

			$price_obj = ( new Price_Model_Factory() )->create( $row );

			//var_dump($price_obj);die;

			if ( $price_obj->get_date_time() < $discount_date_minus_30_days ) {

				//var_dump($prices);

				//var_dump($price_obj->get_date_time()->format( 'Y-m-d H:i:s' ));
				//var_dump($discount_date_minus_30_days->format( 'Y-m-d H:i:s' ));
				//die;
				break;
			}

			if ( $price_obj->get_price() < $lowest_price_obj->get_price() ) {
				$lowest_price_obj = $price_obj;
			}

		}


		return $lowest_price_obj;
	}
}
