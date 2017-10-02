<?php
// fonction qui prend en paramètre un tableau et qui retourne une chaîne avec la fusion de toutes les lignes du tableau.
function fusion($Tabl){
  //Rassemble les éléments d'un tableau en une chaîne
    return implode($Tabl);
}
//fonction qui prend un tableau en paramètre et qui retourne un tableau trié par ordre alphabétique.
function trieAlpha($Tabl){
  // Trie un tableau
  sort($Tabl);
  return $Tabl;
}
// init du tableau langage
$langage = array("HTML","CSS","Javascript","PHP");
// Appels les fonctions
print_r(trieAlpha($langage));
echo fusion($langage);
?>
