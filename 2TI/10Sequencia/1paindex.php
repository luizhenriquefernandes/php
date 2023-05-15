<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botão de Radio</title>
    <link rel = "shortcut icon" href = "imagens/logo3.jpg" type = "x-icon">
    <link rel = "stylesheet" href = "_css/estilo.css">
</head>
<body>
    <div>
        <form method = "post" action= "2paback.php">
        <?php
         
        echo("<input type = 'number' name = 't1' value = '0' step = '0.1' min = '0' max = '100'>Total de Termos<br>");
        echo("<input type = 'number' name = 't2' value = '0' step = '0.1' min = '0' max = '100'>Termo Inicial<br>");
       
        ?>    
        <select name = "r">
                <?php                   
                                       
                    for ($i = 0; $i<=100; $i++)
                    {
                        echo("<option value = '$r$i'>$i</option>");                       
                        
                    }
                           
                ?>
            </select>            
            
            <br>
            <input type="submit" class = "botao" value = "Calcular"/>
        </form>
    </div>
    
</body>
</html>