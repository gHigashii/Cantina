<?php
class User
{
    // declaração de propriedade
    public $Id;
    public $Name;
    public $Login;
    public $Password;
    
    function __construct($id, $name, $login, $password)
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->Login = $login;
        $this->Password = $password;
    }
}
