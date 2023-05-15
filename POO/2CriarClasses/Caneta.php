
    <?php
    /*
     * Criando o objeto caneta
     * No java o documento exige classes separadas, no php as classes podem estar juntas
     * cria-se Class Caneta
     * var $modelo;
     * var significa qualquer tipo de variável. mas pode usar o tipo certo de variável.
     * */
    Class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;
        function rabiscar(){
            if ($this->tampada == true) {
                echo("<p><br>Erro! A caneta está tampada... <br></p>");
            }
            else{
                echo("<p><br>Estou Rabiscando!!!!<br></p>");
            }

        }
        function tampar(){
            $this->tampada = true;

        }
        function destampar(){
            $this->tampada = false;

        }
    }
        ?>

<!---->
<!-- Comentário -->

