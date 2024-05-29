<?php
class Sale
{
    public $Id;
    public $User;
    public $Products = []; // Lista de produtos
    public $Total = 0;
    public $Date;

    function __construct($id, $user, $date)
    {
        $this->Id = $id;
        $this->User = $user;
        $this->Date = $date;
    }

    public function addProduct(Product $product)
    {
        $this->Products[] = $product;
        $this->updateTotal();
    }

    private function updateTotal()
    {
        $this->Total = 0;
        foreach ($this->Products as $product) {
            $this->Total += $product->Price * $product->Qtd;
        }
    }

    public function displayVar()
    {
        echo "Sale ID: " . $this->Id . "\n";
        echo "User: " . $this->User . "\n";
        echo "Date: " . $this->Date . "\n";
        echo "Total: $" . $this->Total . "\n";
        echo "Products:\n";
        foreach ($this->Products as $product) {
            echo " - " . $product->Name . ", $" . $product->Price . ", Quantity: " . $product->Qtd . "\n";
        }
    }
}
