<?php unset($_SESSION ["panier"]);

echo "votre panier est vide"; ?>


    <form name="panier" action="cart.php" method="POST">
        <input type="hidden" name="emptycart" value="1">
        <input type="submit" value="Vider le Panier"/>
    </form>

    //Supprimer article
<?php unset($_SESSION[$item["#"]]);
session_start();

function AjouterQte()
{
    $_SESSION['panier'][$_POST["id_produit"]]++;

}

function EnleverQte()
{
    $_SESSION['panier'][$_POST["id_produit"]]--;
    header("location:catalogue.php");
}


