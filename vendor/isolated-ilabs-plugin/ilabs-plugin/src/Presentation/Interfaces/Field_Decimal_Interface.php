<?php

declare (strict_types=1);
namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Presentation\Interfaces;

interface Field_Decimal_Interface
{
    public function get_value() : float;
    public function set_value(float $value);
    public function get_precision() : int;
    public function set_precision(int $precision);
}
