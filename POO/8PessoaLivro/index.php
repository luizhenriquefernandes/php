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
                    require_once 'Livro.php';
                    $p[0] = new Pessoa();
                    $p[0]->setNome("Paulo");
                    $p[0]->setIdade(23);
                    $p[0]->setSexo("M");
                    $p[1] = new Pessoa();
                    $p[1]->setNome("Maria");
                    $p[1]->setIdade(34);
                    $p[1]->setSexo("F");
                    $p[2]= new Pessoa();
                    $p[2]->setNome("João");
                    $p[2]->setIdade(24);
                    $p[2]->setSexo("Não Sabe");
                    for($i=0;$i<count($p);$i++)
                    {
                       print_r($p[$i]);
                    }
                    $l[0] = new Livro();
                    $l[0]->setTitulo("Trabalhando duro e dobrando o Salário");
                    $l[0]->setAutor("Luizão");
                    $l[0]->setTotPaginas(300);
                    $l[0]->setPagAtual(1);

                    $l[1] = new Livro();
                    $l[1]->setTitulo("Como Fingir que Trabalha na Pandemia");
                    $l[1]->setAutor("Rafa Belo");
                    $l[1]->setTotPaginas(800);
                    $l[1]->setPagAtual(1);
                    $l[2]= new Livro();
                    $l[2]->setTitulo("Camuflagem e Especiarias na Cama");
                    $l[2]->setAutor("Marcelo");
                    $l[2]->setTotPaginas(50);
                    $l[2]->abrirLivro();

                    print("<p>O leitor é {$p[2]->getNome()}</p><br>");
                    print("<p>O título do livro é {$l[2]->getTitulo()}</p><br>");
                    print("<p>O autor é {$l[2]->getAutor()}</p><br>");
                    print("<p>O Total de páginas é {$l[2]->getTotPaginas()}</p><br>");
                    print("<p>O livro está na página {$l[2]->getPagAtual()}</p><br>");
                    ?>

                    </br><input type="submit" class="botao" value="Enviar"/>
                </form>


            </div>
        </pre>
</body>
</html>
 