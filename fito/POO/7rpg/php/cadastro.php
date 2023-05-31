<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FICHA</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../image/scythe.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Ficha RPG</h1>
        <div class="centralDiv">
            <div class="formHell">                
                <form class ="formHellPost" action="../php/personagem.php" method="post">                
                    <?php 
                        for ($i=1;$i<10;$i++){  
                            switch ($i){
                                case '1':
                                    echo("<label for='txtN$i'>Pontos de Vida</label>");                                    
                                     break;
                                case '2':
                                   echo("<label for='txtN$i'>Classe</label>");                                    
                                    break;
                                case '3':
                                    echo("<label for='txtN$i'>Tipo Geográfico</label>");                                    
                                        break;
                                case '4':
                                    echo("<label for='txtN$i'>Constituição</label>");                                    
                                        break;
                                case '5':
                                    echo("<label for='txtN$i'>Força</label>");                                    
                                        break;
                                case '6':
                                    echo("<label for='txtN$i'>Resistência</label>");                                    
                                        break;
                                case '7':
                                    echo("<label for='txtN$i'>Inteligência</label>");                                    
                                        break;
                                case '8':
                                    echo("<label for='txtN$i'>Sabedoria</label>");                                    
                                        break;
                                case '9':
                                    echo("<label for='txtN$i'>Categoria Armadura</label>");                                    
                                        break;
                            }                                                      
                            echo("<input class = 'textForm' type='text' name='txtN$i'>");                           
                        }                        
                    ?>
                    <input class = "btnForm" type="submit" value="Adicionar">
                </form>
            </div>            
        </div>
    </div>
</body>
</html>