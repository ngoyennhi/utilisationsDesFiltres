<?php
//mettre cet morceau de code pour savoir l'erreur si l'on a
error_reporting(E_ALL);
ini_set('display_errors','On');

// Inclusion du fchier qui contient les défnitions de nos
// Tester si la page est appelée après validation du formulaire
if (filter_has_var(INPUT_POST, 'ok')) {
 // Défnir les filtres pour les données saisies.
 $filtres =array(
'nom' => array('filtre'=> FILTER_SANITIZE_STRING,
'flags' => FILTER_FLAG_ENCODE_LOW));
 // Récupérer la saisie fltrée.
 $saisie = filter_input_array(INPUT_POST,$filtres);
 $nom = $saisie['nom'];
 // La valeur saisie est réafchée dans le formulaire e
 // dans la page...
 var_dump($nom);
}
?>