<?php

declare (strict_types=1);
namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Event;

use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Abstracts\Abstract_Event;
use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Interfaces\Wc_Product_Aware_Interface;
use WC_Product;
class Wc_Before_Single_Product extends Abstract_Event implements Wc_Product_Aware_Interface
{
    /**
     * @var WC_Product
     */
    private $product;
    public function create()
    {
        add_action('woocommerce_before_single_product', function () {
            global $product;
            $this->product = $product;
            $this->callback();
        }, 100);
    }
    /**
     * @return WC_Product
     */
    public function get_product() : WC_Product
    {
        return $this->product;
    }
}
