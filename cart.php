<?php
include "functions.php";
include "produits.php";
session_start();
?>


<h1>Mon Panier :</h1>

<p>
    <?php
    //Verifier si le panier existe, si pas de panier, il en crée un vide :
    if (!isset($_SESSION["panier"])) {
        $_SESSION ["panier"] = []; // =[] permet d'ajouter une case à mon tableau

    }

    // Mon panier existe, qu'il soit vide ou non je passe à la suite. J'ajoute un produit :

    if (isset($_POST["id_produit"]) and (isset($_POST["Quantité"]))) {

        $_SESSION ["panier"][] = ["id_produit" => $_POST["id_produit"], "Quantité" => $_POST["Quantité"]];
    }
    //=> Ma condition ci-dessus indique "si mon formulaire "POST" contient un ID produit et une quantité, je les ajoutent à mon tableau SESSION


    $TotalPanier = 0;

    // Je parcours mon tableau de produits. Pour chaque produit j'affiche les éléments :

    foreach ($_SESSION["panier"] as $item) {
        echo "Nom du produit : " . $item ["id_produit"];
        echo "<br>";

        echo "Quantité : " . $item ["Quantité"];
        echo "<br>";

        echo "Prix unitaire HT = " .
            get_produits() [$item ["id_produit"]]["prixHT"];
        echo "<br>";

        // Pour mon total je crée une variable total article qui reprends ma fonction de calcul prix unitaire, et je la mutliplie ap rle nb d'articles
        $TotalArticle = get_produits() [$item["id_produit"]]["prixHT"] * $item ["Quantité"];
        echo "Prix Total = " . $TotalArticle;
        echo "<br>";

        //Pour mon total panier, j'initialis eun total à 0 avant ma boucle foreach. Puis je fait mon calcul totalpanier = le total actuel + le total d'articles
        $TotalPanier = $TotalPanier + $TotalArticle;
        echo "<br>";

    }

    //J'imprime bien après la boucle pour ne pas qu'il m'affiche a chauqeà rticle le total
    echo "TOTAL PANIER = " . $TotalPanier; ?> €
    <br>
    <br>
    <button>
        Vider le Panier
    </button>


</p>


