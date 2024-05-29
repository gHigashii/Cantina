<?php
class Category
{
    // declaração de propriedade
    public $Id;
    public $Name;
    
    function __construct($id, $name)
    {
        $this->Id = $id;
        $this->Name = $name;
    }
}
