<?php


require_once 'Aluno.php';

class Bolsista extends Aluno
{
    private $bolsa;
    public function renovarBolsa()
    {
        echo("<p>Bolsa renovada do aluno <br></p>");
    }
    public function pagarMensalidade()
    {
        print("<p>$this->nome é bolsista então paga com desconto!<br></p>");
    }
	/**
	 * 
	 * @return mixed
	 */
	function getBolsa() {
		return $this->bolsa;
	}
	
	/**
	 * 
	 * @param mixed $bolsa 
	 * @return Bolsista
	 */
	function setBolsa($bolsa) {
		$this->bolsa = $bolsa;
		return $this;
	}
}
?>