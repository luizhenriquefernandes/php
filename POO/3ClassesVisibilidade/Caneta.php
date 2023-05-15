
    <?php
    /*
     * Criando o objeto caneta Com visibilidade
     * var indica visibilidade genérica e no php por padrão é público
     * */
    Class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;
        public function desenhar(){
            if ($this->tampada == true){
                echo("<br><p> Erro! A caneta está tampada e não pode desenhar...</p><br>");
            } else{
                echo("<br><p>Estou desenhando</p><br>");
            }
        }
        public function escrever(){
            if ($this->tampada == true){
                echo("<br><p> Erro! A caneta está tampada e não pode escrever...</p><br>");
            } else{
                echo("<br><p>Estou escrevendo</p><br>");
            }
        }
        public function rabiscar(){
            if ($this->tampada == true) {
                echo("<p><br>Erro! A caneta está tampada... <br></p>");
            }
            else{
                echo("<p><br>Estou Rabiscando!!!!<br></p>");
            }

        }
        public function tampar(){
            $this->tampada = true;

        }
        public function destampar(){
            $this->tampada = false;

        }
    }
        ?>

<!---->
<!-- Comentário -->

