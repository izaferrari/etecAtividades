<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Promoção de Aniversário</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebendo os dados do formulário
        $nomeCliente = $_POST['txtNome'];
        $valorCompra = $_POST['txtValorCompra'];
        $formaPagamento = $_POST['cmbPag'];

        // Inicializa o valor do desconto
        $desconto = 0;

        if ($formaPagamento == "deposito") {
            $desconto = 10; 
        } elseif ($formaPagamento == "boleto") {
            $desconto = 8; 
        } else {
            $desconto = 0; 
        }
        $valorDesconto = ($valorCompra * $desconto) / 100;
        $valorAPagar = $valorCompra - $valorDesconto;
    ?>

    <div class="w3-container w3-teal">
        <h2>PROMOÇÃO DE MÊS DE ANIVERSÁRIO!</h2>
    </div>

    <div class="w3-container">
        <p>Nome: <strong><?php echo $nomeCliente; ?></strong></p>
        <p>Valor da Compra Sem Desconto: <strong>R$ <?php echo number_format($valorCompra, 2, ',', '.'); ?></strong></p>
        <p>Forma de Pagamento escolhida: <strong><?php echo ucfirst(str_replace("cartaoCredito", "Cartão de Crédito", $formaPagamento)); ?></strong></p>
        <p>Desconto de: <strong><?php echo $desconto; ?>%</strong></p>
        <p>Você economizou: <strong>R$ <?php echo number_format($valorDesconto, 2, ',', '.'); ?></strong></p>
        <p>Valor à Pagar: <strong>R$ <?php echo number_format($valorAPagar, 2, ',', '.'); ?></strong></p>
    </div>

    <?php
    }
    ?>

</body>
</html>
