<?php

namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Logger;

class Null_Logger implements Logger_Interface
{
    public function log($log)
    {
    }
    public function error(string $message, array $args = null, string $context = null)
    {
    }
}
