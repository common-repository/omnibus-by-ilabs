<?php

declare (strict_types=1);
namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin;

interface Request_Filter_Interface
{
    public function filter($key, $value);
}
