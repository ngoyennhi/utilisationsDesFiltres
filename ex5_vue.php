<!DOCTYPE html>
<html >
 <head>
 <meta charset="utf-8" />
<title>Saisie</title>
 </head>
 <body>
 <form action="ex5_filterFormulaire.php" method="post">
 <div>
 Nom :
 <input type="text" name="nom"
 value="<?php echo $nom; ?>" />
 <input type="submit" name="ok" value="OK" /><br />
 <?php echo $nom; ?>
 </div>
 </form>
 </body>
</html>