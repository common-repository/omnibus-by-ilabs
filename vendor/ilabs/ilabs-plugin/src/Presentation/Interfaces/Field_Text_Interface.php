<?php

declare (strict_types=1);
namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Presentation\Interfaces;

interface Field_Text_Interface
{
    public function get_value() : string;
    public function set_value(string $value);
    public function get_default() : ?string;
    public function set_default(?string $default);
    public function is_password() : bool;
    public function set_is_password(?bool $is_password);
}
