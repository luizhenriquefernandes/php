<!DOCTYPE html>
<html lang="en, pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style5.css">
    <title>Tela de Login</title>
</head>

<body>

    <form action="Logar.php" method="post">
        <div class="prin">
            <div class="card">
                <div class="card-top">
                    <img class="imglogin" src="imagens/login-g1f39ab68f_1920.png" alt="" srcset="">
                    <h2 class="collor-red">Painel de Controle</h2>
                    <p class="collor-blue">Gerenciar seu Negócio</p>
                </div>
                <div class="card-group">
                    <label for="email">e-mail</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                </div>
                <div class="card-group">
                    <label for="pass">senha</label>
                    <input type="password" name="pass" id="pass" min="8">
                </div>
                <div class="card-group">
                    <label> <input type="checkbox">lembre-me</label>
                </div>
                <div class="card-group btn">
                    <button type="submit" name="btnAcessar" value="Acessar">Acessar </button>
                    <br><br>
                    <button type="submit" name="btnCadastrar" value="Cadastrar">Cadastrar </button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>