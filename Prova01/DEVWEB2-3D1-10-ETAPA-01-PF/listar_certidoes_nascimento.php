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
        $con = new mysqli("localhost", "root", "", "devweb2_1etapa_prova_final");
        $stmt = $con->prepare("select * from certidoes_nascimento order by id");

        $stmt->execute();

        $result = $stmt->get_result();

        while ($linha = $result->fetch_array()) {
            echo $linha["nome"], " - ", $linha["nome_mae"], " - ", $linha["nome_pai"], " - ", $linha["matricula"], "<br>";
        }

        $result->close();
        $stmt->close();
        $con->close();
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>