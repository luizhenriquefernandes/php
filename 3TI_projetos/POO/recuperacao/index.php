<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>conta corrente</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='_css/style4.css'>
    
</head>
<body>
    <pre>
        <div>
    <?php
    require_once 'ContaCorrente.php';
    $c1 = new ContaCorrente("luiz",28585285285,11/11/11,1000);
    $c1 -> Sacar50();
    print_r($c1);

    ?>
    </div>
    </pre>

    
</body>
</html>