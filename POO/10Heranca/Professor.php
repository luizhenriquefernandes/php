<?php
require_once 'Pessoa.php';

class Professor extends Pessoa
{
    private  $especialidade;
    private  $salario;
    //metodos
    public function recebeAumento()
    {
        
        $this->setSalario($this->getSalario()+ $this->getSalario()*0.25 );
        print("<p>O aumento foi de 25% o salário é de {$this->getSalario()}</p><br>");
        
    }
    

	
	/**
	 * 
	 * @return mixed
	 */
	function getEspecialidade() {
		return $this->especialidade;
	}
	
	/**
	 * 
	 * @param mixed $especialidade 
	 * @return Professor
	 */
	function setEspecialidade($especialidade){
		$this->especialidade = $especialidade;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getSalario() {
		return $this->salario;
	}
	
	/**
	 * 
	 * @param mixed $salario 
	 * @return Professor
	 */
	function setSalario($salario){
		$this->salario = $salario;
		return $this;
	}
}
?>