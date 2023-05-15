<!DOCTYPE html>
<html lang="en, pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo1.css">
    <link rel="shortcut icon" href="imagens/logo3.ico" type="image/x-icon">
    <title>Juros Simples</title>
</head>
<body>
<div>        
<form action="calculojuros.php" method="post">
    <?php 
    
    print('<h1>Cálculo de Juros Simples</h1>');  
    print('<p><label>Capital R$:<input type="text" name = "capital" step = "0.1"placeholder = " R$ ,00"></label></p>');
    print('<p><label>Taxa %:<input type="text" name = "taxa" placeholder = "%" step = "0.1"></label></p>');
    print('<p><label>tempo: <input type="number" name = "tempo" placeholder = "🕛"></label></p>');
    print('<p>  <label>mes
                    <input type = "radio" name = "radio" value = "mes">
                </label></p>');
    print('<p>  <label>ano
                    <input type = "radio" name = "radio" value = "ano">
                </label></p>'); 
    print('<p><input type = "submit" class = "botao"</p>');
      
    ?>

    </form>
    </div>
    
</body>
</html>