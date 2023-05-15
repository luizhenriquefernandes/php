<?php
class Conexao
{
    private $_serverName;
    private $_userName;
    private $_dbName;
    private $_password;
    public $_conn;
    public $conexao;

    function __construct($serverName, $userName,  $dbName,$password)
    {
        $this->_serverName = $serverName;
        $this->_userName = $userName;
        $this->_password = $password;
        $this->_dbName = $dbName;
        try {
            $this->_conn = new PDO("mysql:local=$this->_serverName;dbname=$this->_dbName",$this->_userName, $this->_password);
            //PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION 
            $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            print("<br>conexão realizada com sucesso<br>");
            

            
            //code...
        } catch (PDOException $e) {
            //throw $th;
            print("Falta de conexão<br>");
            print("Erro Econtrado {$e->getMessage()}<br>");
        }
        catch(Exception $e)
        {
            print("Erro Genérico {$e->getMessage()}<br>");
        }
    }
    public function connected()
    {
        return $this->_conn? $this->_conn: null;
    }
    public function close_conexao()
    {
        $this->_conn = null;
    }
}

?>