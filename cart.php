<?php
    include "functions.php";
    include "produits.php";
?>

<h1>Mon Panier :</h1>

<p>
<?php
foreach ($_POST as $name=>$nomDuProduit) {
    echo "<li> $name :  $nomDuProduit </li>" ;
}
?>
</p>
