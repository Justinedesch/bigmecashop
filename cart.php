<?php
    include "functions.php";
    include "produits.php";
session_start();
?>





<h1>Mon Panier :</h1>

<p>
    <?php


    if(isset($_POST["id_produit"]) AND (isset($_POST["Quantité"])))
    {
     $_SESSION = ["panier"=> [
         ["id_produit"=>$_POST["id_produit"],"Quantité"=>$_POST["Quantité"]],
         ["id_produit"=>$_POST["id_produit"],"Quantité"=>$_POST["Quantité"]]
     ]];
    }

foreach ($_SESSION as $item) {
    echo "identifiant produit : " . $_SESSION ["panier"][0]["id_produit"];
    echo "<br>";

    echo "Quantité : " . $_SESSION ["panier"][0]["Quantité"];
    echo "Prix unitaire HT :" .
        get_produits() [$_SESSION ["panier"][0]["id_produit"]]["prixHT"];
    echo "Prix Total :" . get_produits() [$_SESSION ["panier"][0]["id_produit"]]["prixHT"] * $_SESSION["panier"][0]["Quantité"];
}
    ?>
</p>


