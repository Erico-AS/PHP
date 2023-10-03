<?php 
    require_once("conta-bancaria.php");

    class ContaCorrente extends ContaBancaria {
        private string $classe = "silver";

        public function get_classe(){
            return $this->classe;
        }

        public function muda_silver(){
            $this->classe = "silver";
        }

        public function muda_gold(){
            $this->classe = "gold";
        }

        public function muda_black(){
            $this->classe = "black";
        }
    }
?>