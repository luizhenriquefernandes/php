<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
        //Array é um tipo de variável complexa;
        // $vetA = array(
        //     0 => 1,
        //     1 => 2,
        //     2 => 3,
        //     3 => 4,
        //     4 => 5
        // );
        // for($i = 0; $i<count($vetA); $i++){
        //     $dobro = $vetA[$i] * 2;
        //     print("chave {$i} = valor {$dobro}<br>");
        // }
        // outra forma de declar array em php
        // echo("declarando com foreach<br>");
        // $vetB = array(1,2,3,4,5);        
        // foreach ($vetB as $key => $value) {
        //     print("chave {$key} valor {$value}<br>");
        // }
        // print("array_push insere um valor no final do vetor<br>");
        // array_push($vetB, 6);
        // foreach ($vetB as $key => $value) {
        //     print("chave {$key} valor {$value}<br>");
        // }
        // print("array_pop exclui um valor no final do vetor<br>");
        // array_pop($vetB);
        // foreach ($vetB as $key => $value) {
        //     print("chave {$key} valor {$value}<br>");
        // }

        $vetAnimal=["abelha","tartígrado","eschistossoma","porco"];
        $vetAnimalB = [];
        foreach ($vetAnimal as $key => $value) {
            array_push($vetAnimalB,$value);            
        }
        foreach ($vetAnimalB as $key => $value) {
            print("vetAnimalB {$value} <br>");
        }
        array_push($vetAnimalB,"tartaruga");
        foreach ($vetAnimalB as $key => $value) {
            print("{$value} <br>");
            # code...
        }
        $numero=[1,2,3,4,5];
        $numero1=[1,2,3,4,5];
        $resultado = 0;
        foreach ($numero as $key => $value) {
            $resultado = $value * $numero1[$key];
            print("O resultado de {$value}x{$numero1[$key]} = $resultado<br>");
            # code...
        }
        //multiplicando todos os índices aplicando a associativa
        foreach ($numero as $key => $linha) {
            foreach ($numero1 as $key => $coluna) {
                $resultado = $linha*$coluna;
                print("O resultado de {$linha}x{$coluna} = $resultado<br>");
                # code...
            }
        }
    ?>
</body>
</html>