<?php

namespace Ilabs\Omnibus_By_Ilabs;

use DateTime;
use Exception;

class Price_Model_Factory {

	public function create( array $data ): ?Price_Model {
		if ( isset( $data[ Price_Model::ARRAY_PRICE_KEY_0 ] )
		     && isset( $data[ Price_Model::ARRAY_DATETIME_KEY_1 ] )
		     && isset( $data[ Price_Model::ARRAY_IS_ON_SALE_KEY_2 ] )
		) {
			try {
				if ( ! is_float( $data[ Price_Model::ARRAY_PRICE_KEY_0 ] ) ) {
					return null;
				}

				$date_time = $this->create_date_time( $data[ Price_Model::ARRAY_DATETIME_KEY_1 ] );

				return new Price_Model( $data[ Price_Model::ARRAY_PRICE_KEY_0 ], $date_time,
					$data[ Price_Model::ARRAY_IS_ON_SALE_KEY_2 ] );
			} catch ( Exception $e ) {
				return null;
			}
		}

		return null;
	}

	/**
	 * @throws Exception
	 */
	private function create_date_time( string $date ): DateTime {
		return new DateTime( $date );
	}

}