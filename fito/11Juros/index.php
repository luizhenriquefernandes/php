<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <header></header>    
    <main>
    <div>    
    <form action="juros.php" method="post">
            
            <fieldset> <legend>Operação</legend>
            <input type = "radio" name = "operacao" id = "juros" value = "1" checked/>
            <label for = "juros">Juros Simples</label>
            <input type = "radio" name = "operacao" id = "capital" value = "2" checked/>
            <label for = "capital">Capital</label>
            <input type = "radio" name = "operacao" id = "montante" value = "3"/>
            <label for = "montante">Montante</label>
            <input type = "radio" name = "operacao" id = "tempo" value = "4"/>
            <label for = "tempo">Tempo</label><br>
            <input type = "radio" name = "operacao" id = "taxa" value = "5"/>
            <label for = "taxa">Taxa</label>
            </fieldset>            
            <fieldset><legend>Calculadora de Juros</legend>
                <?php
                    print("<label for = 'jurosSimples'>Juros Simples<label/><br>");
                    print("<input type='number' name='js' id='jurosSimples'step = '0.01'><br>");
                    print("<label for = 'capital'>Capital<label/><br>");
                    print("<input type='number' name='cp' id='capital'step = '0.01'><br>");
                    print("<label for = 'montante'>montante<label/><br>");
                    print("<input type='number' name='mn' id='montante'step = '0.01'><br>");
                    print("<label for = 'tempo'>tempo<label/><br>");
                    print("<input type='number' name='tmp' id='tempo'step = '0.01'><br>");
                    print("<label for = 'taxa'>taxa<label/><br>");
                    print("<input type='number' name='tx' id='taxa'step = '0.01'><br>");
                                           
                        

                ?>

            </fieldset>
            <input type="submit" value="C Juros">
            </div>
        </form>
    </main>
    <footer></footer>
    
</body>
</html>