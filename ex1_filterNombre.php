<?php
// la fonction afficher avec 2 paramettres pour afficher les resultats
function afficher($x,$f){
    // utilisee pour affichier les resultats
    echo var_export($x,TRUE).'=>'.var_export($f,TRUE).'<br/>';
};

//ex1:
echo "<b> Filtrer un nombre entier <br/> ";
$valeurs = array('123','abc','1.2',NULL);
foreach ($valeurs as $x) {
    afficher($x,filter_var($x,FILTER_VALIDATE_INT));
};

//ex2:
echo "<b>+ NULL au lieu de FALSE en cas d’erreur</b><br />";
$x ='abc';
// indicateur passé en option directement
// l’indicateur FILTER_NULL_ON_FAILURE peut être utilisé avec tous les filtres pour que les fonctions retournent la valeur NULL au lieu de la valeur FALSE en cas d’échec
$options = FILTER_NULL_ON_FAILURE;
afficher($x,filter_var($x,FILTER_VALIDATE_INT,$options));



//ex3:
echo "<b>Filtrer un nombre entier (0-100)</b><br />";
// options du filtre définies via un tableau associatif
$options =array('options' => array('min_range' => 0,'max_range' => 100));
$valeurs = array('0','100','101');
foreach ($valeurs as $x) {
    afficher($x,filter_var($x,FILTER_VALIDATE_INT,$options));
};


//ex4:
echo "<b>+ NULL au lieu de FALSE en cas d’erreur</b><br />";
// indicateur ajouté dans le tableaux des options
$options = array(
    'options' => array('min_range'=>0,'max_range'=>100),
    'flags' => FILTER_NULL_ON_FAILURE
);
$x = '101';
afficher($x,filter_var($x,FILTER_VALIDATE_INT,$options));

//ex5:
echo "<b>Filtrer avec une expression rationnelle</b><br />";
$regexp = '<^[0-9]{2}/[0-9]{2}/[0-9]{4}$>';
$options =array('options' => array('regexp' => $regexp));
$valeurs = array('01/01/2007','01/01/07');
foreach ($valeurs as $x) {
    afficher($x,filter_var($x,FILTER_VALIDATE_REGEXP,$options));
    }
?>