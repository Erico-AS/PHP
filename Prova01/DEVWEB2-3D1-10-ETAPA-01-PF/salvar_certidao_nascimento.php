<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once("certidao_nascimento.php");
        $nome = $_POST["nome"];
        $nome_mae = $_POST["nome_mae"];
        $nome_pai = $_POST["nome_pai"];
        $matricula = $_POST["matricula"];

        $certidao = new CertidaoNascimento($nome, $nome_mae, $nome_pai, $matricula);
        echo $certidao->salvar();
        echo "<br>"
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>