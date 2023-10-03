<?php

    class Pessoa {
        public $nome = "";
        public $idade = "";
        public $sexo = "";

        public function __construct($nome, $idade, $sexo) 
        {
            $this.$nome = $nome;
            $this.$idade = $idade;
            $this.$sexo = $sexo;
        }

        public function Frases($nome, $idade, $sexo) {
            echo "Meu nome é " . $nome . " tenho " . $idade . " , e sou do sexo " . $sexo;
        }
    }

    $obj = new Pessoa("Érico", "17", "Maculino");
    $obj = new Pessoa("Érico", "18", "Maculino");
    $obj = new Pessoa("Érico", "19", "Maculino");

?>