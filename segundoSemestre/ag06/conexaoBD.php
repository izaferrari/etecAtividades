<?php 
// Obtendo os dados do formulário
$nome = $_POST['txtNome'];
$senha = $_POST['txtSenha'];

// Incluindo a conexão com o banco de dados
require_once 'conexaoBD.php';

// Usando prepared statements para segurança
$sql = "SELECT * FROM usuario WHERE nome = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $nome); // 's' indica que o parâmetro é uma string
$stmt->execute();
$resultado = $stmt->get_result();
$linha = $resultado->fetch_array(MYSQLI_ASSOC);

// Verificando se o usuário existe
if ($linha != null) {
    // Verificando a senha
    if ($linha['senha'] == $senha) {
        echo '<a href="principal.php"><h1 class="w3-button w3-teal">' . $nome . ', Seja Bem-Vinda!</h1></a>';
    } else {
        echo '<a href="index.php"><h1 class="w3-button w3-teal">Login Inválido!</h1></a>';
    }
} else {
    echo '<a href="index.php"><h1 class="w3-button w3-teal">Login Inválido!</h1></a>';
}

// Fechando a conexão
$stmt->close();
$conexao->close();
