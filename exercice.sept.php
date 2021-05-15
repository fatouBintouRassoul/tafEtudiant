<?php
/*
Écrire un script qui génère un nombre supérieur à 10 000 puis affiche
dans:
● une table HTML , les valeurs sont inférieures à la moyenne du
tableau
● une table HTML ,les valeurs supérieures à la moyenne.
*/
$nombre=rand(10001,50000);
$moy=(50000+10001)/2;
$arr_tab=[];
foreach ($arr_tab as $key => $value) {
  if($nombre<$moy){
    $key=$nbre;
  }else{
    $key=$nbre
  }
}
?>
