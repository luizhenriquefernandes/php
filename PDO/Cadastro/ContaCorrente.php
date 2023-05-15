<?php
include "";
include "";
class ContaCorrente
{
    private $_conexao;
    public function __construct()
    {
        try {
            $this->_conexao = new Conexao("localhost", "root", "cadastro", "");

            $this->_conexao->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            print("Problemas de Conexão<br> {$e->getMessage()}<br>");
        }
    }
    public function getAll()
    {
        $sql = "select * from cliente";
        $stmt = $this->_conexao->_conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}
