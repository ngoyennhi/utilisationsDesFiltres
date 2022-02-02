<?php
$loc = filter_input(INPUT_GET,'loc');
$path = '';
switch ($loc) {
    // Ex 1
    case 'ex1_filterNombre':
        $path = 'ex1_filterNombre.php';
        break;
    default:
        $path = 'home.php';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisations des filters</title>
</head>
<body>
    <?php include($path);?>
    <a href="index.php?loc=ex1_filterNombre">TP Ex1</a>
    <br>
</body>
</html>