<!DOCTYPE html>
<html lang="en, pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo3.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/style4.css">
    <title>POO Orientação a Objeto</title>
</head>
<body>
    <pre>
        <div>          
            
            
            
            <?php  
                require_once "Pessoa.php";      
                
                $pessoa = new Pessoa();
                $pessoa -> setDataNascimento(isset($_POST['data'])?($_POST['data']):0);                
                $pessoa ->aniversario(); 
               
                                 
            ?>
               

            
        </div>

    </pre>

    
</body>
</html>