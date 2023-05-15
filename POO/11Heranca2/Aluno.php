<?php


require_once 'Pessoa.php';
class Aluno extends Pessoa
{
  private  $matr;
  private  $curso;
 
  //Metodos
  
  public function/*se inserir final aqui não deixa sobrescrever*/ pagarMensalidade()
  {
	  print("<p>Pagando a mensalidade do aluno<strong> $this->nome </strong><br></p>");
  }
  
  
  
	/**
	 * 
	 * @return mixed
	 */
	function getMatr() {
		return $this->matr;
	}
	
	/**
	 * 
	 * @param mixed $matr 
	 * @return Aluno
	 */
	function setMatr($matr) {
		$this->matr = $matr;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getCurso() {
		return $this->curso;
	}
	
	/**
	 * 
	 * @param mixed $curso 
	 * @return Aluno
	 */
	function setCurso($curso) {
		$this->curso = $curso;
		return $this;
	}
}
?>
