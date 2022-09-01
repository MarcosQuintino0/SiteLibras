<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../Site//css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../Site/css/login.css">
    <link rel="icon" href="images/icon.png">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                <h3 class="title has-text-black">LOGIN</h3>
                                    <input name="usuario" name="text" class="input is-large" placeholder="Usuário" autofocus="" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha" required>
                                </div>
                            </div>

                            <div class="field">
                                <p>Não possui cadastro? <a href="../Site/cadastro.php">Cadastre-se aqui.</a></p>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">ENTRAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>