<?php
require_once "database.php";

$db = new DB();
$products = $db->GetAllProducts($db);

var_dump($products);

class Cataloguebis
{
    private $Item = array();

    function __construct(array $Data)
    {
        $this->Item = $Data;
        $this->GetAllProducts($db);
    }

}

$data = new catalogue ($products);

