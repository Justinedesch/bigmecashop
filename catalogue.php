<?php
include("header.php");
include "functions.php";
include "produits.php";
include "catalogue.php.php";
include "Item.php";
session_start();
?>

<?php

// Souvent on identifie cet objet par la variable $conn ou $db
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=nouvelleversionbdd;charset=utf8',
    "Jdesch",
    1234
);

?>

<?php

$Item1 = new Item;
$Item1->name = "Aerial";
$Item1->description = "Maquette gunpla";
$Item1->price = 27;
$Item1->imageUrl = 'https://media.cdnws.com/_i/58934/14060/1953/60/bans63030-0.jpg';
$Item1->weight = 150;
$Item1->stock = 5;
$Item1->available = true;
$Item1->promotion = 10;

function displayItem(Item $produit) {


?>

    <div class="produit">

        <h1><?= $produit->name ?> </h1>
        <img src="<?= $produit->imageUrl ?>"/>
        <p><?= $produit->price ?> </p>
        <p>
            <button <?php if ($produit->available == false) : ?>disabled <?php endif; ?>>
                Acheter
            </button>
        </p>

        <div class="tarifs">
            Prix HT = <?php echo $produit->price; ?> €
            Prix TTC = <?php {
                echo calculPrixTTC($produit->price);
            } ?> €
            Prix Soldé = <?php if ($produit->promotion > 0) {
                echo calculPrixSolde($produit->price, $produit->promotion);
            } ?> €

        </div>

        <div class="formulaire">

            <form name="panier" action="cart.php" method="POST">
                <label for="Quantité"> Quantité : </label>
                <input type="hidden" name="id_produit" value="<?php echo $produit->itemId; ?>"/>
                <input type="number" name="Quantité"/>
                <input type="submit" value="Ajouter au panier"/>
            </form>
            <hr>
        </div>
    </div>


<?php

}

echo displayItem($Item1);
var_dump($Item1);


//
//$Item2 = new Item();
//$Item2->name = "lfrit";
//$Item2->description = "Maquette gunpla";
//$Item2->price = 32;
//$Item2->imageUrl = 'https://riseofgunpla.com/wp-content/uploads/2022/06/HG-Gundam-Lfrith-the-witch-from-mercury-box-art.jpg';
//$Item2->weight = 120;
//$Item2->stock = 0;
//$Item2->available = false;
//
//$Item3 = new Item();
//$Item3->name = "00sky";
//$Item3->description = "Maquette gunpla";
//$Item3->price = 90;
//$Item3->imageUrl = 'https://www.super-hobby.fr/zdjecia/3/5/4/32023_rd.jpg';
//$Item3->weight = 50;
//$Item3->stock = 2;
//$Item3->available = true;
//
//public class Catalogue
//{
//
//
//$Catalogue = array($Item1, $Item2, $Item3)
//
//    function displayCatalogue()
//    {
//
//  <div class="produit">
//        <h1><?= $produit['titre'] ?><!-- </h1>-->
<!--        <img src="--><?php //= $produit['photo'] ?><!--"/>-->
<!--        <p>--><?php //= $produit['prixHT'] ?><!-- </p>-->
<!--        <p>-->
<!--            <button --><?php //if ($produit ['disponnibilite'] == false) : ?><!--disabled --><?php //endif; ?><!-
<!--                Acheter-->
<!--            </button>-->
<!--        </p>-->
<!---->
<!--        <div class="tarifs">-->
<!--            Prix HT = --><?php //echo $produit['prixHT']; ?><!-- €-->
<!--            Prix TTC = --><?php //{
//                echo calculPrixTTC($produit ['prixHT']);
//            } ?><!-- €-->
<!--            Prix Soldé = --><?php //if ($produit['promotion'] > 0) {
//                echo calculPrixSolde($produit['prixHT'], $produit['promotion']);
//            } ?><!-- €-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="formulaire">-->
<!---->
<!--            <form name="panier" action="cart.php" method="POST">-->
<!--                <label for="Quantité"> Quantité : </label>-->
<!--                <input type="hidden" name="id_produit" value="--><?php //echo $key; ?><!--"/>-->
<!--                <input type="number" name="Quantité"/>-->
<!--                <input type="submit" value="Ajouter au panier"/>-->
<!--            </form>-->
<!--            <hr>-->
<!--        </div>-->
<!--    </div>-->
<!--    }-->


<!---->
<!--   public function __serialize()-->
<!--    {-->
<!--        return [-->
<!--            'name' => $this->item ->name,-->
<!--            'description' => $this->description,-->
<!--            'price' => $this->price,-->
<!--            'imageUrl' => $this->imageUrl,-->
<!--            'stock' => $this->stock,-->
<!--            'available' => $this->available,-->
<!---->
<!--        ];-->
<!--    }-->
<!---->
<!--    public function __unserialize(array $Item): void-->
<!--    {-->
<!--        $this->name = $Item ['name'];-->
<!--    }-->
<!---->
<!---->
<!--}-->
<!---->


<!--$produits = get_produits();-->
<!--foreach ($produits as $key => $produit) :-->
<!--    ?>-->
<!--    <div class="produit">-->
<!--        <h1>--><?php //= $produit['titre'] ?><!-- </h1>-->
<!--        <img src="--><?php //= $produit['photo'] ?><!--"/>-->
<!--        <p>--><?php //= $produit['prixHT'] ?><!-- </p>-->
<!--        <p>-->
<!--            <button --><?php //if ($produit ['disponnibilite'] == false) : ?><!--disabled --><?php //endif; ?><!-
<!--                Acheter-->
<!--            </button>-->
<!--        </p>-->
<!---->
<!--        <div class="tarifs">-->
<!--            Prix HT = --><?php //echo $produit['prixHT']; ?><!-- €-->
<!--            Prix TTC = --><?php //{
//                echo calculPrixTTC($produit ['prixHT']);
//            } ?><!-- €-->
<!--            Prix Soldé = --><?php //if ($produit['promotion'] > 0) {
//                echo calculPrixSolde($produit['prixHT'], $produit['promotion']);
//            } ?><!-- €-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="formulaire">-->
<!---->
<!--            <form name="panier" action="cart.php" method="POST">-->
<!--                <label for="Quantité"> Quantité : </label>-->
<!--                <input type="hidden" name="id_produit" value="--><?php //echo $key; ?><!--"/>-->
<!--                <input type="number" name="Quantité"/>-->
<!--                <input type="submit" value="Ajouter au panier"/>-->
<!--            </form>-->
<!--            <hr>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<?php
//endforeach;
//?>
<?php
include("footer.php");
?>



