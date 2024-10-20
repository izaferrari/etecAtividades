<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
            $nome = $_POST['txtNome'];
            $senha = $_POST['txtSenha'];
            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "pwii";

            $conexao = new mysqli($servername, $username, $password, $dbname);

            if ($conexao->connect_error) {
                die("Connection failed: " . $conexao->connect_error);
            }

            $sql = "SELECT * FROM usuario WHERE nome = '".$conexao->real_escape_string($nome)."'";
            $resultado = $conexao->query($sql);
            $linha = mysqli_fetch_array($resultado);

            if ($linha != null) {
                if ($linha['senha'] == $senha) {
                    echo '<h1 class="w3-button w3-teal">Bem-vindo, '.$nome.'!</h1>';
                    echo '<a href="principal.php"><h1 class="w3-button w3-teal">Ir para a página principal</h1></a>';
                } else {
                    echo '<a href="index.php"><h1 class="w3-button w3-teal">Login Inválido!</h1></a>';
                }
            } else {
                echo '<a href="index.php"><h1 class="w3-button w3-teal">Login Inválido!</h1></a>';
            }

            $conexao->close();
        ?>
        <?php require_once('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php 
    session_start(); // Inicia a sessão

    // Obtendo os dados do formulário
    $nome = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];

    // Incluindo a conexão com o banco de dados
    require_once 'conexaoBD.php';

    // Usando prepared statements para segurança
    $sql = "SELECT * FROM usuario WHERE nome = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $linha = $resultado->fetch_array(MYSQLI_ASSOC);

    // Verificando se o usuário existe
    if ($linha != null) {
        // Verificando a senha
        if ($linha['senha'] == $senha) {
            echo '<a href="principal.php"><h1 class="w3-button w3-teal">'.$nome.', Seja Bem-Vinda!</h1></a>';
            $_SESSION['logado'] = $nome; // Armazenando nome na sessão
        } else {
            echo '<a href="index.php"><h1 class="w3-button w3-teal">Login Inválido!</h1></a>';
        }
    } else {
        echo '<a href="index.php"><h1 class="w3-button w3-teal">Login Inválido!</h1></a>';
    }

    // Fechando a conexão
    $stmt->close();
    $conexao->close();
    ?>
</div>

<?php require_once('rodape.php'); ?>

    </div>
</body>
</html>
