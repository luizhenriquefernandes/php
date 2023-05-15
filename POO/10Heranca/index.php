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
                    require_once 'Pessoa.php';
                    require_once 'Aluno.php';
                    require_once 'Professor.php';
                    require_once 'Trabalhador.php';

                    $p1 = new Pessoa();
                    $p2 = new Aluno();
                    $p3 = new Professor();
                    $p4 = new Trabalhador();
                    
                    $p1->setNome("Paulo");
                    $p1->setIdade(24);
                    print("<p>O nome é: {$p1->getNome()} e a idade é {$p1->getIdade()} anos.</p><br>");
                    $p1->fazerAniv();
                    print("<p>O {$p1->getNome()} fez aniversário a idade atual é {$p1->getIdade()} anos.</p><br>");
                    $p2->setNome("Gustavo");
                    $p2->setIdade(18);
                    $p2->setMatr(33);
                    print("<p>O nome é: {$p2->getNome()} e a idade é {$p2->getIdade()} anos.</p><br>");
                    $p2->fechaMatricula(); 
                    $p3->setNome("Cabral");
                    $p3->setIdade(48);
                    $p3->setSalario(4000);
                    $p3->setEspecialidade("Microbiologia");
                    print("<p>O nome é: {$p3->getNome()} e a idade é {$p3->getIdade()} anos, a especialidade é<br>{$p3->getEspecialidade()} e o salario é {$p3->getSalario()} .</p><br>");
                    $p3->recebeAumento();
                    $p3->fazerAniv();
                    print("<br>");

                    
                    
                    $p4->setNome("BARBA");
                    $p4->setIdade(56);
                    $p4->setSexo("M");
                    $p4->setSetor("Diteroria");
                    $p4 ->setTrabalhando(true);
                    print("<p>O nome é: {$p4->getNome()} e a idade é {$p4->getIdade()} anos<br>o setor é {$p4->getSetor()} e seu trabalho é {$p4->getTrabalhando()} </p>}");
                    $p4->mudarTrabalho();
                    $p4->mudarTrabalho();
                    $p4->mudarTrabalho();
                    $p4->mudarTrabalho();
                    $p4->fazerAniv();
                    $p4->fazerAniv();
                                

                    ?>

                    </br><input type="submit" class="botao" value="Enviar"/>
                </form>
            </div>
        </pre>
</body>
</html>
 