<?//
//phpinclude("produits.php");
//?>


<?php




function calculPrixTTC($prixHT,$Taxe=20){
$prixTTC = $prixHT*(1+$Taxe/100);
return $prixTTC;
}


function calculPrixSolde($prixHT,$promotion){
$prixSolde = ($prixHT - $promotion);
return $prixSolde;

}




