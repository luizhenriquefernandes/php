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
        <form >
        <?php
            for ($i=1; $i <= 3; $i++) { 
            echo('<label for="txtNum"'.$i.'>Número'.$i.'</label>');
            echo('<input type="text" id = "txtNum"'.$i.' name = "txtNumero"'.$i.' value = "valor">');
            }   
                                              
        ?>         
        </form>
        <div class="divFooter">
            <?php
            
            print("<button onclick='chamar()'>Lançar</button>");

            ?>
        </div>
    </div><!--  fim containerCentral -->
    </div><!--  fim central -->
    </div><!--  fim divContainer --> 
    <script src="./js/app.js"></script>
</body>
</html>