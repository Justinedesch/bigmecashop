<?php
    include "functions.php";
    include "produits.php";
?>





<h1>Mon Panier :</h1>

<p>
    <?php
    foreach ($_POST as $IDproduit=>$nomDuProduit) {
    echo "<li> $IDproduit :  $nomDuProduit </li>" ;
    }

    ?>

</p>

