<!DOCTYPE html>
<html lang="en, pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo1.ico" type="image/x-icon">

    <link rel="stylesheet" href="_css/estilo1.css">
    <title>Peso de Massa Corporal</title>
</head>
<body>
    <hedader></hedader>
    <main>
        <div>
            <?php
        $peso = isset($_POST['v1'])?$_POST['v1']:0;
        $altura = isset($_POST['v2'])?$_POST['v2']:0;
        $r = ($peso / pow($altura,2));
        if($r >=16 and $r <  16.99)
        {
            print('<p>Muito abaixo do peso $r</p><br>');
        }
        else if ($r >=17 and $r <=  18.49)
        {
            print('<p>Abaixo do peso </p><br>');            
        }
        else if ($r >=18.5 and $r <=  24.99)
        {
            print('<p>Peso normal </p><br>');            
        }
        else if ($r >=25 and $r <=  29.99)
        {
            print('<p>Acima do Peso </p><br>');            
        }
        else if ($r >=30 and $r <=  34.99)
        {
            print('<p>Obesidade 1 grau 1$r</p><br>');            
        }
        else if ($r >=35 and $r <=  34.99)
        {
            print('<p>Obesidade grau 2 </p><br>');            
        }
        else 
        {
            print('<p>Obesidade grau 3 </p><br>');            
        }
        echo ($r);
        ?>
        </div>
        

    </main>
    <footer></footer>
    
</body>
</html>
