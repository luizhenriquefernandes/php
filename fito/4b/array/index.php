<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>array</title>
</head>
<body>
    
    <?php
        $coluna = array(
            0 => 1,
            1 => 3,
            2 => 2,
            3 => 2,
            4 => 1,
            5 => 3,
            6 => 3, 
            7 => 2,
            8 => 1);
        $linha = array(
            0 => 1,
            1 => 2,
            2 => 3,
            3 => 3,
            4 => 1,
            5 => 2,
            6 => 2, 
            7 => 3,
            8 => 1);
        $vetResultado = array(
            0 => $coluna[0]*$linha[0],
            1 => $coluna[1]*$linha[1],
            2 => $coluna[2]*$linha[2],
            3 => $coluna[3]*$linha[3],
            4 => $coluna[4]*$linha[4],
            5 => $coluna[5]*$linha[5],
            6 => $coluna[6]*$linha[6],
            7 => $coluna[7]*$linha[7],
            8 => $coluna[8]*$linha[8],
        );
       foreach ($vetResultado as $r){
        print("resultado = {$r}<br>");
       }  
             
    ?>
    
</body>
</html>