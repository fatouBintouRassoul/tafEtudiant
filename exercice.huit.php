<?php
/*
Générer une phrase puis écrire un script qui enlève tous les espaces inutiles
de la phrase.
Règles de Gestion
● Les espaces inutiles sont:
○ les espaces en début et fin de chaîne
○ les espace avant un point
○ les espaces successives
○ les espaces avant une apostrophe
*/
function getRandomStr($lenght){ 
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomStr=''; 
    for ($i = 0; $i < $lenght; $i++) { 
        $index=rand(0, strlen($str)-1); 
        $randomStr.=$str[$index]; 
    } 
    return $randomStr; 
}
$lenght=15; 
echo getRandomStr($lenght); 
$utile=preg_replace("/\s+/", "", $randomStr);
echo $randomStr."<br>";
echo $utile;
?>
