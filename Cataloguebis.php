<?php
require_once "database.php";


class Cataloguebis
{
    private $Items = array();

    function __construct(array $Data)
    {
        $this->Items = $Data;
    }

    public function DisplayCatalogue()
    {
        var_dump($this->Items);
    }

}

$db = new DB();
$products = $db->GetAllProducts($db);

$data = new Cataloguebis ($products);
$data->DisplayCatalogue();

