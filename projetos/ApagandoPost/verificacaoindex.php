<!DOCTYPE html>
<html lang="en, pt - BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação URL</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
</head>
<body>
    <div>
        <form action="verificacaoback.php" method="get">
            <?php
                                
                print('<p>Numero 1: <input type = "number" name = "n1" step = "0.01"<br></p>');
               
                print('<p><input type="submit" onclick="this.disabled = true; this.value = "Enviando…"; this.form.submit();" value="Enviar"></p><br>');        
                    
            ?>
            

        </form>

    </div>
    
</body>
</html>