<?php

$formatPrice();
echo $formatPrice €;


$calculPrixHorsTVA($prixTTC){
$prixHT = (100*$prixTTC)/(100+20)
return $prixHT
}


$calculPrixSolde($prixHT,$promotion){
$prixSolde = ($prixHT - $promotion)
return $prixSolde
}


?>


