<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabuada</title>
</head>

<body>
    <?php
    echo '<a href="exemploFor2.php">Voltar</a><br>';
    $t = -1;
    if (isset($_POST["btn0"])) $t = 0;
    elseif (isset($_POST["btn1"])) $t = 1;
    elseif (isset($_POST["btn2"])) $t = 2;
    elseif (isset($_POST["btn3"])) $t = 3;
    elseif (isset($_POST["btn4"])) $t = 4;
    elseif (isset($_POST["btn5"])) $t = 5;
    elseif (isset($_POST["btn6"])) $t = 6;
    elseif (isset($_POST["btn7"])) $t = 7;
    elseif (isset($_POST["btn8"])) $t = 8;
    elseif (isset($_POST["btn9"])) $t = 9;

    echo '<h2>Tabuada do ' . $t . '</h2>';
    echo '<table border="1">';
    echo '<tr><th>Operação</th></tr>';
    for ($i = 0; $i <= 10; $i++) {
        echo '<tr>';
        echo '<td>' . $t . ' x ' . $i . ' = ' . $t * $i . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>

</html>
