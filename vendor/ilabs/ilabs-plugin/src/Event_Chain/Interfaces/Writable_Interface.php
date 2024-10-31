<?php

declare (strict_types=1);
namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Interfaces;

interface Writable_Interface
{
    public function write($key = null, $value = null);
    public function get_key() : string;
}
