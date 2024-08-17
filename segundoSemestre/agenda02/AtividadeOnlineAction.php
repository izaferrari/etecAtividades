<?php
$nome = $_POST['txtNome'] ?? '';
$sobrenome = $_POST['txtSobrenome'] ?? '';
$email = $_POST['txtEmail'] ?? '';
$formacao = $_POST['txtFormacao'] ?? '';
$emprego = $_POST['txtEmprego'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Confirmação de Cadastro</title>
    <style>
        .confirm-container {
            background-color: #009688;
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: 50px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .confirm-container p {
            margin: 8px 0;
            font-size: 18px;
        }
        .confirm-container p strong {
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <div class="confirm-container w3-card-4">
        <h2 class="w3-center">Cadastro Confirmado com Sucesso</h2>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Sobrenome:</strong> <?php echo htmlspecialchars($sobrenome); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Formação:</strong> <?php echo htmlspecialchars($formacao); ?></p>
        <p><strong>Descrição Último Emprego:</strong> <?php echo htmlspecialchars($emprego); ?></p>
    </div>

    <div class="w3-container w3-center w3-margin-top">
        <a href="request.php" class="w3-button w3-teal">Voltar à Página Inicial</a>
    </div>

</body>

</html>
