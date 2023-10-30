<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
       $numero1 = isset($_GET['txtNumero1'])?$_GET['txtNumero1']:0;
       echo("$numero1<br>");
       $numero2 = isset($_GET['txtNumero2'])?$_GET['txtNumero2']:0;
       echo("$numero2<br>");
       $numero3 = isset($_GET['txtNumero3'])?$_GET['txtNumero3']:0;
       echo("$numero3<br>");
       echo("<button id = 'btnVoltar' onclick='voltar()'>voltar</button>");
       function voltar(){
        
        header('Location: ../index.php');  
       }
         
    ?>
    <!--  -->
    
</body>
</html>