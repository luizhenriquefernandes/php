<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo Array</title>
</head>
<body>
    <pre>
    <?php

        // $vetMedia = array(
        //     "0" => "8",
        //     "1" => "8",
        //     "2" => "8",
        //     "3" => "8",
        //     "4" => "8");
        //     $soma = 0;
            
        //     foreach ($vetMedia as $key =>$c )
        //     {
        //         print("Posição {$key}<br> Valor {$c}<br>");
        //         $soma = $soma+$c;               

        //     }

            // $media = $soma/count($vetMedia);
            // print("O tamanho do vetor é ".count($vetMedia)."<br>");
            // print("média {$media}<br>");
        // $vetA = array (
        //     "0" => "2",
        //     "1"=> "4",
        //     "2"=> "6",
        //     "3"=> "8"
        // );
        // $vetB = array(
        //     "0" => "1",
        //     "1" => "3",
        //     "2" => "5",
        //     "3" => "7"            
        // );
        // $vetResultado = array();
       
        // for ($i = 0; $i<4;$i++)
        // {
        //     $vetResultado[$i] = $vetA[$i]*$vetB[$i];
        //     print("<p>A chave $i = $vetResultado[$i]<br></p>");
        // }
        $VET= array(
            '0'=> 2,
            '1'=> 4,
            '2'=> 8,
            '3'=> 4,
            '4'=> 6);
            $soma = 0;
            foreach($VET as $valor) {
                print($valor."<br>");
                $soma = $soma + $valor;

            }
print($soma."<br>");
    ?>
    </pre>
    
</body>
</html>


