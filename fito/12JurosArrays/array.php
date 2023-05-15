<!DOCTYPE html>
<html lang="en, pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Arrays</title>
</head>
<body>
    <header></header>
    <main>
    <div>
        <pre>
        <?php
            /*Arrays são variáveis compostas, servem para otimizar o código
            pode-se nomear ou númerar os índices que depois podem virar dicionários
            e coleções de dados.
            Uma lista dentro de um php é muito versátil.*/
            $vetA = array (
                "lanche" => "Hamburguer",
                "doce" => "Torta de Chocolate",
                "bolo" => "Cenoura",
                "massa" => "Macarrão",
                "ceral" => "Arroz"/**Não há a necessidade de inserir vírgula na última linha */
            );
            //para ver o que há dentro do array
            print var_dump($vetA);
            print_r($vetA);
            print("<p>Valor do índice doce = $vetA[doce]</p>");
            
        ?>
        </pre>
        </div>
    </main>
    <footer></footer>
    
</body>
</html>

