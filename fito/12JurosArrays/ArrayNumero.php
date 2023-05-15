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
            $a = $_POST['n0'];
            $b = $_POST['n1'];
            print("$a e $b <br>");
            for($i=0;$i<5;$i++)
            {
            $vetNumero = new ArrayIterator(array($_POST['n0'],$_POST['n1'],
            $_POST['n2'],$_POST['n3'],$_POST['n4']));
            
            }
          print_r($vetNumero);
        
           $vetNumeroA = array(
            "0"=> 5,
            "1"=> 10,
            "2"=> 11,
            "3"=> 34,
            "4"=> 56,
            "5"=> 75
           );
           $vetNumeroB = array(
            "0"=> 4,
            "1"=> 7,
            "2"=> 9,
            "3"=> 10,
            "4"=> 22,
            "5"=> 1
           );

           $vetResultado = array();           
            for ($i=0; $i<count($vetNumeroA); $i++)
           {
            $vetResultado[$i] = $vetNumeroA[$i] * $vetNumeroB[$i];
            print ("indice $i valor: $vetResultado[$i]<br>");
           }
           foreach ($vetResultado as $c)
           {
            print ("valor: $c<br>");
           }
        ?>
        </pre>
        </div>
    </main>
    <footer></footer>''    
</body>
</html>