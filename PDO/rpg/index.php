<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ficha de RPG</title>
</head>


<body>
    <form action="Personagem.php" method="post">Personagem
         <div class="container">
            <div class="box">
                <div class="box-row">
                    <div class="box-cell box1">   
                        <label for=" nome">Nome<br></label>
                        <input type="text" name="nome" id="nome"><br>
                        <label for="raca">Raça<br></label>
                        <input type="text" name="raca" id="raca"><br>
                        <label for="profissao">Profissão<br></label>
                        <input type="text" name="profissao" id="profissao"><br>
                        <label for="constituicao">Constituição<br></label>
                        <input type="number" name="constituicao" id="constituicao"><br>
                        <label for="destreza">Destreza<br></label>
                        <input type="number" name="destreza" id="destreza"><br>
                        <label for="forca">Força<br></label>
                        <input type="number" name="forca" id="forca"><br>
                        <label for="inteligencia">Inteligência<br></label>
                        <input type="number" name="inteligencia" id="inteligencia"><br>
                        <label for="sabedoria">Sabedoria<br></label>
                        <input type="number" name="sabedoria" id="sabedoria"><br>
                    </div>
                    <div class="box-cell box2">   
                        <label for="carisma">Carisma<br></label>
                        <input type="number" name="arma" id="carisma"><br>
                        <label for="arma">Arma<br></label>
                        <input type="text" name="arma" id="arma"><br>
                        <label for="categoria">Categoria de Armadura<br></label>
                        <input type="number" name="categoria" id="categoria"><br>
                        <label for="vida">Pontos de Vida<br></label>
                        <input type="number" name="vida" id="vida"><br>
                        <label for="magiaDia">Qt de Magias por Dia<br></label>
                        <input type="number" name="magiaDia" id="magiaDia"><br>
                        <label for="cadastrar">Cadastrar<br></label>
                        <input type="submit" name="cadastrar" id="cadastrar"><br>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>