<?php 
    class CertidaoNascimento {
        private $nome = "";
        private $nome_mae = "";
        private $nome_pai = ""; 
        private $matricula = ""; 

        public function __construct($nome, $nome_mae, $nome_pai, $matricula) {
            $this->nome = $nome;
            $this->nome_mae = $nome_mae;
            $this->nome_pai = $nome_pai;
            $this->matricula = $matricula;
        }

        public function get_nome() {
            return $this->nome;
        }

        public function get_nome_mae() {
            return $this->nome_mae;
        }
        public function get_nome_pai() {
            return $this->nome_pai;
        }
        public function get_matricula() {
            return $this->matricula;
        }

        public function salvar() {
            $this->nome = strtoupper($this->nome);
            $this->nome_mae = strtoupper($this->nome_mae);
            $this->nome_pai = strtoupper($this->nome_pai);
            $this->matricula = strtoupper($this->matricula);

            $con = new mysqli("localhost", "root", "", "devweb2_1etapa_prova_final");
            $stmt = $con->prepare("insert into certidoes_nascimento(nome, nome_mae, nome_pai, matricula) values (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $this->nome, $this->nome_mae, $this->nome_pai, $this->matricula);
            $stmt->execute();
            $stmt->close();
            $con->close();
            echo '<h3 color="green">Cadastrado!</h3>';
        }
    }
?>