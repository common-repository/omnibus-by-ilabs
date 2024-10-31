<?php

namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Event;

use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Abstracts\Abstract_Event;
class Wc_Loaded extends Abstract_Event
{
    public function create()
    {
        add_action('woocommerce_loaded', function () {
            $this->callback();
        });
    }
}
