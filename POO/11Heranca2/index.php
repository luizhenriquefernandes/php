<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/style4.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP POO - Prof. Luiz henrique</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
</head>
<body>
<h1 class='formatadoCentro'>Projeto Livros</h1>
<pre>
            <div>

                <form>
                    <?php
                    require_once 'Visitante.php';
                    require_once 'Aluno.php';
                    require_once 'Professor.php';
                    require_once 'Trabalhador.php';
                    require_once 'Bolsista.php';

                    $v1 = new Visitante();
                    $v1 -> setNome("Carlindo");
                    $v1 -> setIdade(32);
                    $v1 -> setSexo("M");
                    print_r($v1);
                    //exemplo de herança pela diferença da classe mãe
                    $a1 = new Aluno();
                    $a1 ->setNome("Bernardo");
                    $a1 ->setIdade(24);
                    $a1 ->setSexo("M");
                    $a1 ->setCurso("Biologia");
                    $a1 ->setMatr(33);
                    
                    print_r($a1);
                    $b1 = new Bolsista();
                    $b1 ->setNome("Rugol");
                    $b1 ->setIdade(16);
                    $b1 ->setSexo("M");
                    $b1 ->setCurso("Informática");
                    $b1 ->setMatr(3663);
                    $b1->setBolsa(12.5);
                    $b1->pagarMensalidade();                    
                    print_r($b1);
                    $b1 ->renovarBolsa();
                    //aqui ocorrerá sobreposição qualquer outro método na superclasse
                    $b1 ->pagarMensalidade();


                   
                    
                    
                                

                    ?>

                    </br><input type="submit" class="botao" value="Enviar"/>
                </form>
            </div>
        </pre>
</body>
</html>
 