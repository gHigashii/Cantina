<?php
class Product
{
    // declaração de propriedade
    public $Id;
    public $Name;
    public $Price;
    public $Qtd;
    public $Description;
    public $Category;

    function __construct($id, $name, $price, $qtd, $description, $category)
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->Price = $price;
        $this->Qtd = $qtd;
        $this->Description = $description;
        $this->Category = $category;
    }
}
