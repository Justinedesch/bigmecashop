<?php

function formatPrice() {
} ;
echo $formatPrice €;


function calculPrixHorsTVA($prixTTC){
$prixHT = (100*$prixTTC)/(100+20)
return $prixHT
}


function calculPrixSolde($prixHT,$promotion){
$prixSolde = ($prixHT - $promotion)
return $prixSolde
}


?>


