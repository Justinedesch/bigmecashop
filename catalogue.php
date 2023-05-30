    <?php
        include ("header.php");
        include "functions.php";
        include "produits.php";
    ?>

    <?php
         $produits = get_produits();

    //    foreach ($produits as &$produit) {
    //        $produit['prixTTC'] = calculPrixTTC($produit['prixHT']);
    //        $produit['prixPromo'] = calculPrixSolde($produit['prixHT'], $produit['promotion']);
    //    }
    //    echo '<pre>';
    //    print_r($produits);
    //    echo '/<pre>';

        foreach ($produits as $produit) :
    ?>
    <div class= "produit">
    <h1><?= $produit['titre']?> </h1>
    <img src= "<?= $produit['photo'] ?>" />
    <p><?= $produit['prixHT'] ?> </p>

    <p>
        <button <?php if ($produit ['disponnibilite'] == false) : ?>disabled <?php endif; ?>>

            Acheter
            </button>
    </p>
    </div>

    <div class= "Tarifs">
    Prix HT = <?php echo $produit['prixHT'];?>
            <br>
        Prix TTC= <?php { echo calculPrixTTC($produit ['prixHT']);} ?>
            <br>
        Prix Soldé = <?php if ($produit['promotion'] >0) { echo calculPrixSolde($produit['prixHT'],$produit['promotion']);} ?>
    </div>


    <?php

    foreach ($produits as &$produit) ?>
        <br>

    <form name="panier" action="cart.php" method="POST">
    <label for="Quantité"> Quantité :</label>
    <input type="number" name="Quantité">
    <br>
    <br>
    <button> Ajouter au panier </button>

        <hr>


    <?php
    endforeach;
    ?>



    <?php
        include ("footer.php");
    ?>



