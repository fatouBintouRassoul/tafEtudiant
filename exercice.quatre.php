<?php
/*
Générer trois nombres entiers puis les afficher dans l'ordre
croissant et dans l’ordre décroissant
*/
$ent1=rand(-20,20);
$ent2=rand(-20,20);
$ent3=rand(-20,20);


if($ent1>$ent2){
    $min=$ent2;
    $max=$ent1;
}else{
  $min=$ent1;
  $max=$ent2;
}
if($ent3<$min){
    $milieu=$min;
    $min=$ent3;
}else{
    if($ent3<$max){
      $milieu=$ent3;
    }else{
      $milieu=$max;
      $max=$ent3;
    }

}
echo "Dans l'ordre croissant on a : {$min},{$milieu},{$max} <br>";
echo "Dans l'ordre décroissant on a {$max},{$milieu},{$min}";  
?>
