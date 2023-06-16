<?php

class DB extends PDO
{
    public $db;

    public function __construct()
    {
        $this->getPDO();
    }

    public function getPDO()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=bigmechashop;charset=utf8', 'Jdesch', 1234);


        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());

        }

    }

    function GetAllProducts()
    {
        $SelectAllProducts = $this->db->prepare("SELECT * FROM products");
        $SelectAllProducts->execute();
        $products = $SelectAllProducts->fetchAll();
        return $products;

    }

    function GetAllClients()
    {
        $SelectAllClients = $this->db->prepare("SELECT * FROM customers");
        $SelectAllClients->execute();
        $clients = $SelectAllClients->fetchAll();
        return $clients;

    }

}


// 2 Requêtes sur une seule table
//function GetAllProducts($db)
//{
//    $SelectAllFromProducts = $db->prepare("SELECT * FROM products;");
//
//    $SelectAllFromProducts->execute();
//    $products = $SelectAllFromProducts->fetchAll();
//    return $products;
//}
//
//var_dump(GetAllProducts($db));


//function GetProductOutOfStocks($db)
//{
//    $SelectProductUnavailable = $db->prepare("SELECT * FROM products WHERE available = 0;");
//
//    $SelectProductUnavailable->execute();
//    $products = $SelectProductUnavailable->fetchAll();
//    return $products;
//
//}
//
//$tests = GetProductOutOfStocks($db);
//foreach ($tests as $test) {
//    foreach ($test as $key => $t) {
//        echo $key . ' ' . $t;
//    }
//}


//
//
//// Deux requêtes sur plusieurs tables
//
//
//function GetordersGroupByCustomers($db)
//
//{
//    $SelectOrderByCustomer = $db->prepare("SELECT COUNT(orders.id),customers.first_name, customers.last_name FROM CUSTOMERS JOIN ORDERS ON customers.id = orders.customer_id GROUP BY first_name;");
//
//    $SelectOrderByCustomer->execute();
//    $products = $SelectOrderByCustomer->fetchAll();
//
//}
//
//echo GetordersGroupByCustomers($db);
//
//
////Requetes INSERT ou DELETE ou UPDATE
//
//function UpdatePrix($db)
//{
//    $AugPrix = $db->prepare("UPDATE products SET quantity = quantity * 0.05 WHERE categorie_id = 3
//
//");
//
//    $AugPrix->execute();
//    $products = $AugPrix->fetchAll();
//
//}
//
//echo UpdatePrix($db);
//


//Exécuter une requête d’écriture (insertion, modification ou suppression) :


//FONCTION UPDATE
//
//$DeleteProduct = $db->prepare("UPDATE products SET price = 52.10 WHERE categorie_id = 3");
//
//$DeleteProduct->execute();
//$products = $DeleteProduct->fetchAll();


//FONCTION DELETE
//$DeleteProduct = $db->prepare("DELETE FROM products WHERE id = 18");
//
//$DeleteProduct->execute();
//$products = $DeleteProduct->fetchAll();


//FONCTION INSERT
//
//$DeleteProduct = $db->prepare
//("INSERT INTO products (id,name,description,price,weight,image,quantity,available,categorie_id)
//VALUES (30,'goyave','blabla',67,100,'https://res.cloudinary.com/hv9ssmzrz/image/fetch/c_fill,f_auto,h_600,q_auto,w_800/https://images-ca-1-0-1-eu.s3-eu-west-1.amazonaws.com/photos/original/1560/goyave-produits-AdobeStock_87178075.jpg',2,10,3);");
//
//$DeleteProduct->execute();
//$products = $DeleteProduct->fetchAll();


?>