<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Armazenamento de Dados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logout.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="icon" href="images/icon.png">
</head>
<body>
    <div class="container">
        <div id="home" class="flex-column flex-center">
            <h1>Olá, <?php echo $_SESSION['nome'];?></h1>
            <a href="indexpagina.php" class="btn">Clique aqui para ir ao site</a>
            <a input onclick="parent.location='logout.php'" id="telainicial-btn" class="btn">Sair</a> 
        </div>
    </div>
</body>
</html>