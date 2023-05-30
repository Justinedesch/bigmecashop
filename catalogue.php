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

        foreach ($produits as $key => $produit) :
    ?>
    <div class="produit">

       <h1><?= $produit['titre']?> </h1>
       <img src= "<?= $produit['photo'] ?>" />
       <p><?= $produit['prixHT'] ?> </p>

       <p>

         <button <?php if ($produit ['disponnibilite'] == false) : ?>disabled <?php endif; ?>>
           Acheter
         </button>

        </p>

            <div class="tarifs">

             Prix HT = <?php echo $produit['prixHT'];?> €
             Prix TTC = <?php { echo calculPrixTTC($produit ['prixHT']);} ?> €
             Prix Soldé = <?php if ($produit['promotion'] >0) { echo calculPrixSolde($produit['prixHT'],$produit['promotion']);} ?> €

            </div>

            <div class ="formulaire">

                <form name="panier" action="cart.php" method="POST">
                    <label for="Quantité"> Quantité : </label>
                    <input type="hidden" name="id_produit" value= "<?php echo $key; ?>" />
                    <input type="number" name="Quantité"/>
                    <input type="submit" value="Ajouter au panier"/>
                </form>

                <hr>

            </div>

    </div>


    <?php
        endforeach;
    ?>




    <?php
        include ("footer.php");
    ?>



