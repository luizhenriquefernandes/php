<?php



class ContaPoupanca
{
    public function Sacar50()
    {
        $this->setSaldo($this->getSaldo()-50);
    }
}