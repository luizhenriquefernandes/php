<?php


require_once 'Pessoa.php';
class Trabalhador extends Pessoa
{
  private  $setor;
  private  $trabalhando;  

  //metodo

   public function mudarTrabalho()
   {
       $this->trabalhando = !$this->trabalhando;
       print("<p>Trabalho alterado<br></p>");
       if($this->trabalhando == true)
       {
        print("<p>Você está trabalhando <br></p>");
       }
       else
       {
       print("<p>Você não está Trabalhando <br></p>");
       }
      
   }
	
	/**
	 * 
	 * @return mixed
	 */
	function getSetor() {
		return $this->setor;
	}
	
	/**
	 * 
	 * @param mixed $setor 
	 * @return Trabalhador
	 */
	function setSetor($setor){
		$this->setor = $setor;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getTrabalhando() {
		return $this->trabalhando;
	}
	
	/**
	 * 
	 * @param mixed $trabalhando 
	 * @return Trabalhador
	 */
	function setTrabalhando($trabalhando){
		$this->trabalhando = $trabalhando;
		return $this;
	}
}
?>