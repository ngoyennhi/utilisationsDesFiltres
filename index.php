<?php
$loc = filter_input(INPUT_GET,'loc');
$path = '';
switch ($loc) {
    // Ex 1
    case 'ex1_filterNombre':
        $path = 'ex1_filterNombre.php';
        break;
    // Ex 2
    case 'ex2_filterString':
        $path = 'ex2_filterString.php';
        break;
    // Ex 3
    case 'ex3_filterEuros':
        $path = 'ex3_filterEuros.php';
        break;
    // Ex 4
    case 'ex4_filterTableau':
        $path = 'ex4_filterTableau.php';
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
    <a href="index.php?loc=ex1_filterNombre">TP Ex1 filter Nombres</a>
    <br>
    <a href="index.php?loc=ex2_filterString">TP Ex2 filter Strings</a>
    <br>
    <a href="index.php?loc=ex3_filterEuros">TP Ex3 filter caractères speciaux</a>
    <br>
    <a href="index.php?loc=ex4_filterTableau">TP Ex4 filter tableau</a>
    <br>
</body>
</html>