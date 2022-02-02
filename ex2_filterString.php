<?php
$texte = "<b>c’est l’été</b>";
echo "// texte affiché sans précaution<br />\n";
echo $texte."<br />\n";
echo "// FILTER_SANITIZE_SPECIAL_CHARS<br />\n";
echo filter_var($texte,FILTER_SANITIZE_SPECIAL_CHARS)."<br />\n";
echo "// FILTER_SANITIZE_STRING<br />\n";
echo filter_var($texte,FILTER_SANITIZE_STRING)."<br />\n";
?>