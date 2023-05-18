<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cálculo de numero primo</title>
</head>
<body>
    <div class="container">
        <div class="formulario3b">
            <?php
                $primo = 0;
                $n = $_GET['nmbNumber'];
                for($i=1;$i<=$n;$i++){
                    $r = $n%$i;
                    if($n%2 == 0){
                        
                    
                    if($n%$i == 0){
                        print("$n/$i");
                        $primo = $primo+1 ;                      
                    }}
                    elseif($n%$i > 0){
                        print("->");
                    }
                    else{
                        print("");
                    }
                    
                } 
                if($primo ==2){
                    print("<br>{$n} é primo");
                }
                else if($primo<=1){
                    print("<br>{$primo} {$n} não primo");
                }
                
            ?>
        </div>
    </div>
    
</body>
</html>