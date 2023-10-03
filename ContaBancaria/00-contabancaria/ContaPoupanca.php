<?php 
    require_once("conta-bancaria.php");

    class ContaPoupanca extends ContaBancaria {
        public function aplicarJuros() {
            $this->saldo += $this->saldo * 0.5 / 100;
            return "Juros aplicados";
        }
    }
?>