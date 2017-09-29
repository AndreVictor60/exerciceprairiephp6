<?php
// fonction qui prend en paramètre un tableau et qui retourne une chaîne avec la fusion de toutes les lignes du tableau.
function fusion($Tabl){
  //Rassemble les éléments d'un tableau en une chaîne
    echo implode($Tabl);
}
//fonction qui prend un tableau en paramètre et qui retourne un tableau trié par ordre alphabétique.
function trieAlpha($Tabl){
  // Trie un tableau
  sort($Tabl);
  // foreach = parcouris un tableau
  // [0]=> HTML, [1]=> CSS, [2]=> Javascript, [3]=>PHP
  foreach ($Tabl as $key => $value) {
    echo "$value  \n";
  }
}
// init du tableau langage
$langage = array("HTML","CSS","Javascript","PHP");
// Appels les fonctions
trieAlpha($langage);
fusion($langage);
?>
