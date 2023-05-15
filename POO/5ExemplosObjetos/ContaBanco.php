<?php

class ContaBanco
{
    //atributos
public $numConta;
private $tipo;
private $cliente;
private $saldo;
private $status;


    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
        print("<p>Conta Criada com sucesso</p>");
    }
    //métodos
    public function abrirConta ($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        print("<p>Conta Criada com sucesso</p>");
        if ($t == "cc")
        {
            $this->setSaldo(50);
        }
        elseif ($t == "cp")
        {
            $this->setSaldo(150);
        }

    }
    public function fecharConta()
    {
        if ($this->getSaldo()>0)
        {
            echo("<p>Conta ainda tem dinheiro, não posso fechar</p>");

        }
        elseif ($this->getSaldo()<0)
        {
            echo("<p>Você não pode fechar a conta porque o saldo está negativo</p>");

        }
        else{
            $this->setStatus(false);
        }


    }
    public function depositar($v)
    {
        if($this->getStatus())
        {
            $this->setSaldo($this->getSaldo()+$v);
        }
        else
        {
            echo("<p>Conta fechada não é possível fazer o depósito</p>");
        }
    }
    public function sacar($v)
    {
        if($this->getStatus())
        {
            if($this->getSaldo()>$v)
            {
                $this->setSaldo($this->getSaldo()-$v);
            }
            else
            {
                echo("<p>Saldo Insuficiente para o Saque</p>");
            }

        }
        else
        {
            echo("<p>Não posso sacar de uma conta fechada</p>");

        }
    }
    public function pagarMensal($v)
    {
        if($this->getTipo()=="cc")
        {
            $v = 12;
        }
        elseif($this->getTipo()=="cp")
        {
            $v=20;
        }
        if ($this->getStatus())
        {
            $this->setSaldo($this->getSaldo()-$v);
        }
        else
        {
            echo("<p>Problemas com a conta não tem como cobrar</p>");
        }

    }


    //getters and setters


    public function getNumConta()
    {
        return $this->numConta;
    }


    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }


    public function getCliente()
    {
        return $this->cliente;
    }


    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }


    public function getSaldo()
    {
        return $this->saldo;
    }


    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }


    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status)
    {
        $this->status = $status;
    }




}
?>