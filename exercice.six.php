<?php
/*
Soit l'équation ax 2+bx+c=0,générer la valeur de a , de b et de c
puis donner les solution de l'équation ci dessus.
*/
$a=rand(-10,10);
$b=rand(-10,10);
$c=rand(-10,10);

echo "La solution de l'équation {$a}x2+{$b}x+{$c}=0 est : ";
$delta=$b*$b-(4*$a*$c);
if($delta<0){
    echo "L'équation n'admet pas de solution. <br>";
} elseif ($delta==0){
    $x0=-$b/2*$a;
    echo "Cette équation admet une solution double égale à : {$x0} <br>";
}else{
    $x1=(-$b-sqrt($delta))/(2*$a);
    $x2=-($b+sqrt($delta))/(2*$a);
    echo "Cette équation admet deux solutions : {$x1}, {$x2} <br>";
}
?>
