<?php

namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Presentation\Interfaces;

interface Group_Item_Interface
{
    public function get_id() : string;
    public function set_id(string $id);
    public function to_array() : array;
}
