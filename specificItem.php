<?php

class specificItem extends Item
{
    public string $grade;

    public function __construct(array $specific_products)
    {
        $this->specific_products = $specific_products;
    }

    public function DisplaySpecificItem()
    {

        foreach ($this->specific_products as $specific_products)

            include "Item.php";

//            var_dump($client);
    }

}

$db = new DB();
$clients = $db->Getgrade($db);
var_dump($clients);

$specific_products = new specificItem ($specific_products);
$specific_products->DisplaySpecificItem();