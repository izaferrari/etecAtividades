<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas do 8º Ano A</title>
</head>
<body>

<h2>8º ANO A</h2>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Nome</th>
        <th>Primeiro Semestre</th>
        <th>Segundo Semestre</th>
    </tr>

    <?php
    $alunos = [
        ["Aline", 10, 9.5],
        ["Alfredo", 8, 5],
        ["Carla", 5, 6.5],
        ["César", 9, 9],
        ["Daniel", 10, 7],
        ["Esnar", 8, 6],
        ["Henzo", 6, 7],
        ["Pablo", 7, 5.5],
        ["Wallace", 9, 7],
        ["Zulmira", 10, 7]
    ];

    foreach ($alunos as $aluno) {
        echo "<tr>";
        echo "<td>" . $aluno[0] . "</td>";
        echo "<td>" . $aluno[1] . "</td>";
        echo "<td>" . $aluno[2] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
