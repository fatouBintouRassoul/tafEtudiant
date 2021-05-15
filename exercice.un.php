<?php
/*
Générer deux nombres puis faire leur permutation.On
affichera les deux nombres avant et après permutations.
*/
$nbre_un=rand(-50,50);
$nbre_deux=rand(-50,50);
if ($nbre_un!=$nbre_deux){
    echo "Avant permutation : $nbre_un,$nbre_deux";
}else{
    echo "Après permutation : $nbre_deux,$nbre_un";
}
?>
