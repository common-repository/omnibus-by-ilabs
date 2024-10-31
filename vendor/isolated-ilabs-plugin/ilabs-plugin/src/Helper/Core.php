<?php

namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Helper;

class Core
{
    public function get_current_domain() : string
    {
        if (\function_exists('get_home_url')) {
            $home_url = get_home_url();
            $parsed_url = \parse_url($home_url);
            return $parsed_url['host'] ?? '';
        } else {
            return $_SERVER['HTTP_HOST'] ?? '';
        }
    }
}
