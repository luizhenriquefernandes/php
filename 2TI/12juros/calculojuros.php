<!DOCTYPE html>
<html lang="en, pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo1.css">
    <link rel="shortcut icon" href="imagens/logo3.ico" type="image/x-icon">
    
    <title>Cálculo de Juros Simples</title>
</head>
<body>
    <div>
        <?php
            print('<h1>Resultado do Juros</h1>');
            $c = isset($_POST['capital'])?$_POST['capital']:'valor inválido';
            (float)$c1 = str_replace(',','.',$c);
            $tx = isset($_POST['taxa'])?
            $_POST['taxa']:'valor inválido';
            (float)$tx1 = str_replace(',','.',$tx);           
            $tempo = isset($_POST['tempo'])?$_POST['tempo']:'valor inválido';           
            $r = $_POST['radio']?$_POST['radio']:'valor inválido';
            $rtx = $tx1/100;
            print('O capital é '.number_format($c1,2));
                     

            if($r == "mes")
            {            
                $juros = $c1 * $rtx * $tempo;
                print('<br>');
                $juros = str_replace('.',',',(string) $juros);
                $montante = $juros + $c1;                
                print('O juros total é de: '.$juros.' ao mês<br><br>');
                print('O montante é: '.$montante.' ao mês<br><br>');
                     
                
            }
            elseif ($r == "ano")
            {
                $juros = $c1 * $rtx * ($tempo*12);
                print('<br>');
                $juros = str_replace('.',',',(string) $juros);                
                print('O juros total é de: '.$juros.' ao ano<br><br>');
                $montante = $juros + $c1; 
                print('O montante é: '.$montante.' ao ano<br><br>');

            }
            else{
                print('Opção Inválida');
            }
            print('<a class = "botao" href="javascript:window.history.go(-1)">Voltar</a>');
            
        ?>
        
    </div>
    
</body>
</html>