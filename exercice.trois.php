<?php
/*
Générer deux nombres entiers puis les afficher dans l'ordre
croissant et dans l’ordre décroissant
*/
$entier_un=rand(-50,50);
$entier_deux=rand(-50,50);
if ($entier_un<$entier_deux){
    $petit=$nbre_un;
    $grand=$nbre_deux;
    echo "Dans l'ordre croissant : $petit,$grand";
}elseif ($entier_un>$entier_deux){
    $petit=$nbre_deux;
    $grand=$nbre_un;
    echo "Dans l'ordre décroissant : $grand,$petit";
}else{
    echo "Les deux entiers générés sont égaux!";
}
?>
