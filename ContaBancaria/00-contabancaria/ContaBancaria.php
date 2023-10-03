<?php 
    class ContaBancaria {
        private int $conta = 0;
        private string $nome = "";
        protected float $saldo = 0.00;

        public function __construct($nome, $conta)
        {
            $this->nome = $nome;
            $this->conta = $conta;
        }

        public function depositar($valor) {
            if ($this->saldo > 0)
                $this->saldo += $valor;
        }

        public function sacar($valor) {
            if ($valor <= $this->saldo && $this->saldo > 0) {
                $this->saldo -= $valor;
            }
        }

        public function get_nome($nome) {
            return $this->nome;
        }

        public function get_conta($conta) {
            return $this->conta;
        }
    }
?>