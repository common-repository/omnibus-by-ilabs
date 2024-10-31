<?php

namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Event;

use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Abstracts\Abstract_Event;
class Wp_Admin_Init extends Abstract_Event
{
    public function create()
    {
        add_action('admin_init', function () {
            $this->callback();
        });
    }
}
