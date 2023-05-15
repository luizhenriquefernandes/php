<?php


require_once 'Pessoa.php';
class Aluno extends Pessoa
{
  private  $matr;
  private  $curso;
 
  //Metodos
  public function fechaMatricula()
  {
    print("<p>Matrícula {$this->getMatr()} referente ao aluno: {$this->getNome()} está Cancelada</p><br>");
  }
  
  
  //getter and Setter


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
