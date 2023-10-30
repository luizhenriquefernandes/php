<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Magia</title>
    <link rel="stylesheet" href="./css/styleMain.css">
</head>
<body>
    <div class="divContainer">
    <div class="central">            
    <div class="containerSuperior">
        <h7>Listas de Magia</h7>
    </div><!--  fim containerSuperior -->
    <div class="containerCentral">
        <form method = "get" action = "./php/magia.php">
        <?php
            for ($i=1; $i <= 3; $i++) { 
            echo('<label for="txtNum"'.$i.'>Número'.$i.'</label>');
            print("<input type='text' name='txtNumero{$i}'id=''>");            
            }
            print("<input type = 'submit' value = 'Lançar'>");                                              
        ?>                  
        </form>
        
        
    </div><!--  fim containerCentral -->
    </div><!--  fim central -->
    </div><!--  fim divContainer --> 
   
</body>
</html>