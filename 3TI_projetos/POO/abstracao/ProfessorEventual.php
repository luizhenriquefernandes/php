<?php
require_once 'Professor.php';
class ProfessorEventual extends Professor
{
  public function substituirProf()
  {
    echo ("<p>Estou substituindo o prof <br></p>");
  } 
  public function corrigirProva()
  {
    print("<p><br><input type = 'text' value = 'Estou Corrigindo a prova' <br></p>");
  } 
}
 ?>