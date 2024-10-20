<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <title>Listar Amigos</title>
</head>

<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
        <h1 class="w3-center w3-teal w3-round-large w3-margin">Listagem de Amigos</h1>
        <table class="w3-table-all w3-centered">
            <tr class="w3-center w3-teal">
                <th>Código</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Email</th>
                <th>Excluir</th>
                <th>Atualizar</th>
            </tr>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "pwii";
            $port = "3307"; // Porta para conexão

            $conexao = new mysqli($servername, $username, $password, $dbname, $port);

            if ($conexao->connect_error) {
                die("Connection failed: " . $conexao->connect_error);
            }

            $sql = "SELECT * FROM amigo";
            $resultado = $conexao->query($sql);

            if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $linha['idamigo'] . "</td>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['apelido'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td><a href='excluir.php?id=" . $linha['idamigo'] . "'><i class='fa fa-trash w3-large w3-text-red'></i></a></td>";
                    echo "<td><a href='atualizar.php?id=" . $linha['idamigo'] . "'><i class='fa fa-pencil w3-large w3-text-blue'></i></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum amigo encontrado</td></tr>";
            }

            $conexao->close();
            ?>
        </table>
    </div>
</body>

</html>
