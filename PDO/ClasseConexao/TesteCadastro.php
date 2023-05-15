
<?php

function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}

?>

<?php

switch (get_post_action('btnCadastrar', 'btnAcessar')) {
    case 'btnCadastrar':

        //save article and keep editing
        print_r(" <form action='CrudCadastro.php' method='post'>
        <div class='prin'>
            <div class='card'>
                <div class='card-top'>
                    <img class='imglogin' src='imagens/login-g1f39ab68f_1920.png' alt=' srcset='>
                    <h2 class='collor-red'>Painel de Controle</h2>
                    <p class='collor-blue'>Gerenciar seu Negócio</p>
                </div>
                <div class='card-group'>
                    <label for='email'>e-mail</label>
                    <input type='email' name='email' id='email' placeholder='Digite seu e-mail' required>
                </div>
                <div class='card-group'>
                    <label for='pass'>senha</label>
                    <input type='password' name='pass' id='pass' min='8' placeholder='Senha' pattern='^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$])[a-zA-Z0-9@#$]{8,50}$' required>
                </div>
                <div class='card-group'>
                    <label> <input type='checkbox'>lembre-me</label>
                </div>
                <div class='card-group btn'>
                    <button type='submit' name='btnAcessar' value='Acessar'>Acessar </button>
                    <br><br>
                    <button type='submit' name='btnCadastrar' value='Cadastrar'>Cadastrar </button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
                        ");

        break;

    case 'btnAcessar':
        print('Mundo');
        //save article and redirect
        break;



    default:
        //no action sent
}
?>

    


        