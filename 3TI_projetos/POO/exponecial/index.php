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
<form action="Conta" method="post">
    <pre>
        <div>
    <?php
    require_once 'ExpressaoO.php';
    require_once 'Conta.php';
    print("<p><input type = 'number' name = 'n1'></p><br>"); 
    print("<p><input type = 'submit'></p><br>");  
    ?>
    </div>
    </pre>
    </form>

    
</body>
</html>