<?php 
    class Moeda {
        public string $quantia;

        public function __construct($quantia) {
            $this->quantia = $quantia;
        }

        public static function formata_moeda($valor) {
            return "R$ " . number_format($valor, 2, ",", ".");
        }
    }
?>