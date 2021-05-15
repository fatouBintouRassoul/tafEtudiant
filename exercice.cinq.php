<?php
/*
Soit l'équation ax+b=0,générer la valeur de a et de b puis donner
les solution de l'équation ci dessus.
*/
$a=rand(-10,10);
$b=rand(-10,10);
if ($a=0){
    $b=0;
    $solution=$b;
}elseif ($b=0) {
    $x=0;
    $solution=$x;
}elseif ($a!=0 && $b!=0) {
    $x=-$b/$a;
    $solution=$x;
}
echo "La solution de l'équation ax+b est : $solution";
?>
