<?php
    class Cadeira{
        /**atributos itens essenciais para a criação do objeto*/
        public $modelo;
        public $cor;
        public $preco;
        public $material;
        public $sentada = false;
        /**métodos */
        public function sentarCadeira($sentada){
            if($sentada == true){
                echo("Alguem já está ocupando a cadeira é impossível sentar");
            }else{
            $sentada = true;
            echo("Estou sentado na cadeira");
            }
            return $sentada;
        }
        public function levantarCadeira(){
            $sentada = false;
            echo("Estou levantando da cadeira");
        }
    }
?>