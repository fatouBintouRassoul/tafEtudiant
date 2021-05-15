<?php
/*
Point: Générer deux points puis calculer et afficher la
distance entre les deux points.Un point est caractérisé par son abscisse et
son Ordonnée.
*/
$a=rand(-10,10);
$b=rand(-10,10);
$c=rand(-10,10);
$d=rand(-10,10);

function carre($val){
      return $val*$val;
}
function distancePoints(int $a, int $c, int $b, int $d):float{
    return sqrt(carre($d-$c)+carre($b-$a));
}

?>
