<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "pwii";
$port = "3307"; // Porta definida para conexão

$conexao = new mysqli($servername, $username, $password, $dbname, $port);

if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

if (isset($_POST['txtID'])) {
    $id = $_POST['txtID'];

    $sql = "DELETE FROM amigo WHERE idamigo = $id";

    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Amigo excluído com sucesso!');</script>";
        echo "<script>window.location.href='listar.php';</script>";
    } else {
        echo "Erro ao excluir o amigo: " . $conexao->error;
    }
} else {
    echo "ID não foi passado corretamente.";
}

$conexao->close();

