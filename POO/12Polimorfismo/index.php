<!DOCTYPE html>
<html lang="pt-BR" name="português">
    <head>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" href="imagens/logo3.ico"type = "x-icon"/>
        <link rel="stylesheet" href = "_css/style.css"/>
        <title>POO-Polimorfismo</title>
    </head>

    <body>
        <header>
            <?php
                print("<h1 class = 'centroBranco'>POO - Polimorfismo de Sobrecarga</h1>");
            ?> 
        </header>
        <main>
            <div>
                <form>
                    <pre>
                        <?php                            
                            require_once 'Mamifero.php';
                            require_once 'Aves.php';
                            require_once 'Peixe.php';
                            require_once 'Reptil.php';
                            require_once 'Cachorro.php';
                            require_once 'Canguru.php';
                            require_once 'Arara.php';
                            require_once 'Cobra.php';
                            require_once 'Tartaruga.php';
                            print("Reino Animalia");
                            $m = new Mamifero();
                            $m->setPeso(250.55);
                            $m->setCorPelo("<p>Amarelo</p>");
                            $m->setMembros(4);
                            $m->setIdade(5);
                            print("<p class = 'formated'>O animal é Mamífero, seu peso é {$m->getPeso()} possui {$m->getMembros()} possui {$m->getIdade()} anos</p>");
                            $m->emitirSom();
                            $m->alimentar();
                            $m->locomover();
                            $p = new Peixe();
                            $p->setCorEscama("Azul, Amarela");
                            $p->setIdade(2);
                            $p->setMembros(5);
                            print("<p class = 'formated'>O animal é Peixe, seu peso é {$p->getPeso()}. Possui {$p->getMembros()} 1 nadadeira dorsal,<br>  1 nadadeira pelvica,  2 nadadeiras lateais e  1 nadadeira caudal.<br> Possui {$p->getIdade()} anos</p>");
                            $p->emitirSom();
                            $p->alimentar();
                            $p->locomover();
                            $p->soltarBolhas();

                            $r = new Reptil();
                            $r->setPeso(30.50);
                            $r->setCorEscama("<p>Verde</p>");
                            $r->setMembros(5);
                            $r->setIdade(7);
                            print("<p class = 'formated'>O animal é Réptil, seu peso é {$r->getPeso()} possui {$r->getMembros()} possui {$r->getIdade()} anos</p>");
                            $r->emitirSom();
                            $r->alimentar();
                            $r->locomover();

                            $a = new Aves();
                            $a->setPeso(5);
                            $a->setCorPena("<p>Vermelho, Branca e Preta</p>");
                            $a->setMembros(5);
                            $a->setIdade(7);
                            print("<p class = 'formated'>O animal é Ave, seu peso é {$a->getPeso()} possui {$a->getMembros()} possui {$a->getIdade()} anos</p>");
                            $a->emitirSom();
                            $a->alimentar();
                            $a->locomover();
                            $a->fazerNinho();

                            $c = new Canguru();

                            $ca = new Cachorro();

                            $ar = new Aves();

                            $t = new Tartaruga();

                            $c ->locomover();
                            $ca->locomover();
                            $t->locomover();
                            $ar->locomover();

                            $co = new cobra();
                            
                            $co->locomover();
                            $co->alimentar();
                        ?>
                        </pre>
                </form>
            </div>
        </main>
        <footer>
            <h1 class = 'centroBranco'>Contato enviar e-mail</h1>
        </footer>
    </body>
</html>

