<?php
$texte = "€";
echo "// texte d’origine<br />\n";
echo $texte."<br />\n";
echo "// FILTER_SANITIZE_STRING ";
echo "+ option FILTER_FLAG_ENCODE_HIGH<br />\n";
echo filter_var($texte,FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_HIGH)."<br />\n";
?>