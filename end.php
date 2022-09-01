<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Final</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="icon" href="images/icon.png">
</head>
<body>
    <div class="container">
        <div id="end" class="flex-center flex-column">
            <h1 id="finalScore">0</h1>
            <form class="end-form-container">
                <h2 id="end-text">Digite seu nome abaixo para salvar sua pontuação!</h2>
                <input type="text" name="name" id="username" placeholder="Insira seu nome">
                <button class="btn" id="saveScoreBtn" onclick="saveHighScore(event)" disabled>Salvar</button>
            </form>
            <a href="game.php" class="btn">Jogar Novamente</a>
            <a href="indexquiz.php" class="btn">Voltar<i class="fas fa-home"></i></a>
        </div>
    </div>
    <script src="Js/end.js"></script>
</body>
</html>