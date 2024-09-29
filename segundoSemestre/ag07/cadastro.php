<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro - PDO</title>
</head>

<body class="w3-black"> <a href="index.php" class="w3-display-topleft "> <i class="fa fa-arrow-circle-left w3-large w3-blue w3-button w3xxlarge"></i> </a>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-displaymiddle">
        <h1 class="w3-center w3-blue w3-round-large w3margin">Cadastro de Produtos</h1>
        <form action="cadastroAction.php" class="w3-container" method='post'> <label class="w3-text-blue" style="fontweight: bold;">Código</label> <input name="txtID" class="w3-input w3-grey w3border" disabled><br> <label class="w3-text-blue" style="fontweight: bold;">Nome</label> <input name="txtNome" class="w3-input w3-light-grey w3border"><br> <label class="w3-text-blue" style="fontweight: bold;">Preço</label> <input name="txtPreco" class="w3-input w3-light-grey w3border"><br> <label class="w3-text-blue" style="fontweight: bold;">Quantidade</label> <input name="txtQtd" class="w3-input w3-light-grey w3-border"><br> <button name="btnAdd" class="w3-button w3-blue w3-cell w3-roundlarge w3-right w3-margin-right"> <i class="w3-xxlarge  fa fa-plus-square"></i> Adicionar </button> </form>
    </div>
</body>

</html>