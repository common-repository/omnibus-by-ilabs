<?php

namespace Ilabs\Omnibus_By_Ilabs;

use WC_Product;

class Price_Note_Template_Service {

	public function get_product_note_html( float $lowest_price, WC_Product $product ): string {
		$note = __( 'Lowest price 30 days before the discount:', 'omnibus-by-ilabs' );

		$formatted_price = omnibus_by_ilabs()->format_omnibus_price( $lowest_price, $product );

		return apply_filters(
			'ilabs_omnibus_price_note',
			"<p class='ilabs-omnibus-price-note'>$note $formatted_price</p>",
			$note,
			$formatted_price
		);
	}

	public function output_product_note_html( float $lowest_price, WC_Product $product ) {
		echo wp_kses( $this->get_product_note_html( $lowest_price, $product ), [ 'p' => [ 'class' => [] ] ] );
	}
}
