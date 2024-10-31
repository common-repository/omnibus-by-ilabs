<?php

namespace Ilabs\Omnibus_By_Ilabs;

use DateTime;

class Price_Model {

	const ARRAY_PRICE_KEY_0 = 0;

	const ARRAY_DATETIME_KEY_1 = 1;

	const ARRAY_IS_ON_SALE_KEY_2 = 2;

	/**
	 * @var float
	 */
	private $price;

	/**
	 * @var DateTime
	 */
	private $date_time;

	/**
	 * @var bool
	 */
	private $is_on_sale;


	public function __construct( float $price, DateTime $date_time, bool $is_sale_price ) {
		$this->price         = $price;
		$this->date_time     = $date_time;
		$this->is_on_sale = $is_sale_price;
	}

	public function to_array(): array {
		return [
			self::ARRAY_PRICE_KEY_0      => $this->price,
			self::ARRAY_DATETIME_KEY_1   => $this->date_time->format( 'Y-m-d H:i:s' ),
			self::ARRAY_IS_ON_SALE_KEY_2 => $this->is_on_sale,
		];
	}

	/**
	 * @return float
	 */
	public function get_price(): float {
		return $this->price;
	}

	/**
	 * @return DateTime
	 */
	public function get_date_time(): DateTime {
		return $this->date_time;
	}

	/**
	 * @return bool
	 */
	public function get_is_on_sale(): bool {
		return $this->is_on_sale;
	}
}
