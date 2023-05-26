<?php
include "C:\xampp\htdocs\bigmecashop\header.php";
include "C:\xampp\htdocs\bigmecashop\footer.php";
?>

<?php

     $produits = [

        //Produit 1 Aerial

        [
            'titre' => 'Aerial',
            'photo' => 'https://media.cdnws.com/_i/58934/14060/1953/60/bans63030-0.jpg',
            'prix' => 27,
            'disponnibilite' => true,
        ],

        //Produit 2 Lfrit

        [
            'titre' => 'Lfrit',
            'photo' => 'https://riseofgunpla.com/wp-content/uploads/2022/06/HG-Gundam-Lfrith-the-witch-from-mercury-box-art.jpg',
            'prix' => 32,
            'disponnibilite' => false,
        ],

        //Produit 3 00 Sky

        [
            'titre' => '00 Sky',
            'photo' => 'https://www.super-hobby.fr/zdjecia/3/5/4/32023_rd.jpg',
            'prix' => 90,
            'disponnibilite' => true,
        ],

    ];

foreach ($produits as $produit) :

?>

<h1><?= $produit ['titre']?> </h1>
<img src="<?= $produit ['photo'] ?>" />
<p><?= $produit ['prix'] ?> </p>

<p>
    <button <?php if ($produit ['disponnibilite'] == false) : ?>disabled <?php endif; ?>>

        Acheter
        </button>
</p>

<hr>

<?php
endforeach;

?>




//VALIDATION DES COMPETENCES DES BOUCLES

//
////boucle while
//$test =45;
//while ($test<50)
//{
//    echo 'ceci est une boucle while';
//    $test = $test +1;
//}
//
//
////boucle for
//
//$test2 =0;
//for($test2=0;$test2<10;$test2++)
//{
//   echo 'ceci est une boucle for';
//}
//
//
//// boucle do while
//
//$test3=0;
//do{
//$test3++;
//echo 'ceci est une boucle do while';
//
//}
//while($test3 <=3);
//
//

