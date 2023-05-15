<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style4.css">
    <link rel="shortcut icon" href="imagens/logo1.ico">
    <title>Document</title>
</head>
<body>
   <h1 class = 'formatadoCentro'>Projeto Pessoa</h1> 
   <pre>
       <div>
           <form>
           <?php
            
            require_once 'Professor.php';
            require_once 'ProfessorEventual.php';
            
            $p1 = new Professor();
            $p1->setNome("Luiz");
            $p1->setIdade(28);
            $p1->setSexo("M");
            $p1->fazerAniversario();
            $p1->setSalario(20000);
            $p1->setEspecializacao("Microbilogia");
            $p1->setIdiomas("English");
            $p1->aumentoSalario();
            $p1->setFormacao("Biologia");
            $p1->setLicenciatura(true);
            $p1->licenciatura();
            print_r($p1);
            $pe1 = new ProfessorEventual();
            $pe1 -> setNome("Paulo");
            $pe1->setSalario(850);
            $pe1->aumentoSalario();
            $pe1->substituirProf();
            $pe1->corrigirProva();
            print_r($pe1);



            ?>
           </form>
       
       </div>
   </pre>
</body>
</html>






