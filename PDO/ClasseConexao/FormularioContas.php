<!DOCTYPE html>
<html lang="en , pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ClasseConexao/_css/style4.css">
    <link rel="shortcut icon" href="./imagens/logo1.ico" type="image/xSAicon">

    <title>Contas</title>
</head>

<body>

    <form action="CrudConta.php" method="post">
        <div>
            <?php
            $i = 1;
            while ($i <= 8) {
                switch ($i) {
                    case (1):
                        print("<p><label for='txtN$i'>Nome</label></p>");
                        break;
                    case (2):
                        print("<p><label for='txtN$i'>Prof</label></p>");
                        break;
                    case (3):
                        print("<p><label for='txtN$i'>Nascimento</label></p>");
                        break;
                    case (4):
                        print("<p><label for='txtN$i'>Sexo</label></p>");
                        break;
                    case (5):
                        print("<p><label for='txtN$i'>Peso</label></p>");
                        break;
                    case (6):
                        print("<p><label for='txtN$i'>Altura</label></p>");
                        break;
                    case (7):
                        print("<p><label for='txtN$i'>Nacionalidade</label></p>");
                        break;
                    case (8):
                        print("<p><label for='txtN$i'>Curso Preferido</label></p>");
                        break;
                    default:
                        print("Valor Inválido");
                        break;
                }

                print("<p><input type='text' name='txtN$i' id='txtN$i'></p>");
                $i++;
            }
            print("<p><label for='btnCadastro'>Cadastro</label></p>");
            print(" <p><input type = 'submit' name  = 'btnCadastro'></p>");
            ?>
        </div>
    </form>

</body>

</html>