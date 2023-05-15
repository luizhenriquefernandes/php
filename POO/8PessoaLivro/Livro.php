<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //Metodos
    public function abrirLivro()
    {
        $this->setAberto(true);
        print("<p>Estou Aberto</p><br> ");
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function fecharLivro()
    {
        $this->setAberto(false);
        print("<p>Estou Fechado</p><br>");
    }

    public function folhear()
    {
        $this->setPagAtual(rand(0, $this->getTotPaginas()));
        print("<p>Estou Folheando e parei na página: </p>" . $this->getPagAtual() . "<br>");
    }

    public function avancarPagina()
    {
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function voltarPagina()
    {
        $this->setPagAtual($this->getPagAtual() - 1);


    }

    //Modificadores e Acessores

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * @param mixed $totPaginas
     */
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    /**
     * @return mixed
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * @param mixed $pagAtual
     */
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
        if ($this->getPagAtual() < 0) {
            $this->setPagAtual(0);
            $this->fecharLivro();
            echo("<p>Estou fechando</p><br>");

        } else {
            echo("<p>O livro está na página </p><br>" . $this->getPagAtual());
        }
    }

    /**
     * @return bool
     */
    public function isAberto()
    {
        return $this->aberto;
    }

    /**
     * @param bool $aberto
     */
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
        print("Estou aberto!");

    }

    /**
     * @return mixed
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * @param mixed $leitor
     */
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

}