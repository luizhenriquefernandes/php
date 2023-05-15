<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Cálculo de Juros</title>
</head>
<body>
    <header></header>
    <main>
     <div>
        <?php
            $jurosSimples = isset($_POST["js"])?$_POST["js"]:0;
            $capital = isset($_POST["cp"])?$_POST["cp"]:0;
            $montante = isset($_POST["mn"])?$_POST["mn"]:0;
            $taxa = isset($_POST["tx"])?$_POST["tx"]:0;
            $tempo = isset($_POST["tmp"])?$_POST["tmp"]:0;
            $operacao = isset($_POST["operacao"])?$_POST["operacao"]:0;
            $calcJurosSimples;            
            switch ($operacao) 
            {
                case "1":
                    $calcJurosSimples = $capital * $taxa *$tempo;
                    print("Juros Simples<br>R$ ".number_format($calcJurosSimples,2,",",".")."<br>");
                    break;
                case "2":
                    $calcCapital = $montante/pow(1+$taxa,$tempo);
                    print("Capital<br>R$ ".number_format($calcCapital,2,",",".")."<br>");
                    break;
                case "3":
                    $calcMontante = $capital * pow(1+$taxa,$tempo);
                    print("Montante<br>R$ ".number_format($calcMontante,2,",",".")."<br>");
                    break;
                case "4":
                    $calcTempo = ($montante-($capital))/(1+$taxa+$tempo);
                    print("Tempo = ".number_format($calcTempo,2)." meses <br>");
                    break;
                
                default:
                    print("Digite uma opção válida");
                    break;
            }         
        ?>
     </div>
    </main>
    <footer></footer>
</body>
</html>