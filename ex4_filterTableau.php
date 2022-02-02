<?php
function afficher($x,$f) { 
    // utilisée pour afficher les résultats
echo var_export($x,TRUE).'<br /> => ',var_export($f,TRUE),'<br />';
}
echo '<b>Filtrer un tableau de nombres entiers</b><br />';
$valeurs = array('123','abc');
// Même filtre à appliquer à toutes les données,
// sans indicateur ni option.
afficher($valeurs,filter_var_array($valeurs,FILTER_VALIDATE_INT));
echo '<b>Filtrer un tableau de données diverses (1)</b><br />';
$valeurs = array(
'age' => 123,
'taille' => 'abc',
'mail' => 'contact@Mickey-MOUSE.fr');
// Filtre diférent mais "simple" (sans indicateur
// ni option) à appliquer aux données.
$filtres = array
(
'age' => FILTER_VALIDATE_INT,
'taille' => FILTER_VALIDATE_INT,
'mail' => FILTER_VALIDATE_EMAIL
);
afficher($valeurs,filter_var_array($valeurs,$filtres));
echo '<b>Filtrer un tableau de données diverses (2)</b><br />';
$valeurs = array(
'age' => 123,
'taille' => 'abc',
'mail' => 'contact@Mickey-MOUSE.fr');
// Filtre avec options et indicateur à appliquer à une
// des données.
$filtre_age = array(
'filter' => FILTER_VALIDATE_INT,
'options' => array('min_range' => 0,'max_range' => 100),
'fags' => FILTER_NULL_ON_FAILURE
);
// Noter la mention d'un fltre pour une donnée
// qui n’existe pas.
$filtres = array(
'age' => $filtre_age,
'taille' => FILTER_VALIDATE_INT,
'poids' => FILTER_VALIDATE_INT, // n'existe pas
'mail' => FILTER_VALIDATE_MAIL);
afficher($valeurs,filter_var_array($valeurs,$filtres));
// Désactiver l’ajout des éléments vides.
echo '<b>La même chose en désactivant l\'ajout d\'éléments vides</b><br/>';
afficher($valeurs,filter_var_array($valeurs,$filtres,FALSE));


//notez la valeur NULL qui a été associée à la donnée
//poids (mentionnée dans le filtre mais absente des données) et la possibilité qui
//nous est offerte de désactiver l’ajout de ces éléments vides.

?>