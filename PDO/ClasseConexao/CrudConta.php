<?php
include "Conexao.php";
    try
    {
        $conexao = new Conexao("localhost","root","cadastro","");
        $conexao->_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $id = null;
        $nome = isset($_POST['txtN1'])?$_POST['txtN1']:null;
        $prof = isset($_POST['txtN2'])?$_POST['txtN2']:null;
        $Nascimento = isset($_POST['txtN3'])?$_POST['txtN3']:null;
        $sexo = isset($_POST['txtN4'])?$_POST['txtN4']:null;
        $peso = isset($_POST['txtN5'])?$_POST['txtN5']:null;
        $altura = isset($_POST['txtN6'])?$_POST['txtN6']:null;
        $nacionalidade = isset($_POST['txtN7'])?$_POST['txtN7']:null;
        $cursoPreferido = isset($_POST['txtN8'])?$_POST['txtN8']:null;
        $sql = "insert into clientes (id,nome, prof, Nascimento, sexo, peso, altura, nacionalidade, cursoPreferido)
        values('$id','$nome','$prof','$Nascimento','$sexo','$peso','$altura','$nacionalidade','$cursoPreferido')";
        $conexao->_conn->exec($sql);
        
                
    }
    catch (PDOException $e)
    {
        print("Problemas <br> {$sql}<br> {$e->getMessage()}<br>"); 
        $conexao->close_conexao();
    }
    
    // private $_conexao;
    // public function __construct()
    // {
    //     try {
    //         $this->_conexao = new Conexao("localhost", "root", "cadastro", "");
    //         print("Conexão Realizada com Sucesso");

    //         $this->_conexao->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     }
    //     catch (PDOException $e) {
    //         print("Problemas de Conexão<br> {$e->getMessage()}<br>");
    //     }
    // }
    // public function getAll()
    // {
    //     $sql = "select * from cliente";
    //     $stmt = $this->_conexao->_conn->prepare($sql);
    //     $stmt->execute();
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     return $stmt->fetchAll();
    // }

   
    ?>

    

