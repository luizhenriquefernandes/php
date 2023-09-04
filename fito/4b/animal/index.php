<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Principal</title>
</head>
<body>
    <div>
        <pre>
        <?php 
            require_once"./php/ClasseAnimal.php";
            $leao = new ClasseAnimal();
            $leao->set_nome("Lion Chefe dos Thundercats");
            $leao->set_peso(14.5);
            print("O nome é {$leao->get_nome()} e o peso é {$leao->get_peso()} ");
        ?>
        </pre>
    </div>
    
</body>
</html>