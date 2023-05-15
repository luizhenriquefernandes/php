<?php
//Classe progenitora abstract ela só pode ser utilizada para herança

abstract class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;
    public function fazerAniv()
    {
       $this->  setIdade($this->getIdade()+1);
       print("<p>Feliz Aniversário sua idade agora é {$this->getIdade()}</p><br>");
    }

	

	/**
	 * 
	 * @return mixed
	 */
	function getNome() {
		return $this->nome;
	}
	
	/**
	 * 
	 * @param mixed $nome 
	 * @return Pessoa
	 */
	function setNome($nome){
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getIdade() {
		return $this->idade;
	}
	
	/**
	 * 
	 * @param mixed $idade 
	 * @return Pessoa
	 */
	function setIdade($idade){
		$this->idade = $idade;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getSexo() {
		return $this->sexo;
	}
	
	/**
	 * 
	 * @param mixed $sexo 
	 * @return Pessoa
	 */
	function setSexo($sexo){
		$this->sexo = $sexo;
		return $this;
	}
}