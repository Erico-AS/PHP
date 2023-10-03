<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form action="salvar_certidao_nascimento.php" method="POST">
        <p>
            Nome:
            <input type="text" name="nome">
        </p>

        <p>
            Nome Mae:
            <input type="text" name="nome_mae">
        </p>

        <p>
            Nome Pai:
            <input type="text" name="nome_pai">
        </p>

        <p>
            Matricula:
            <input type="text" name="matricula">
        </p>

        <p><button>Enviar</button></p>
    </form>

    <a href="listar_certidoes_nascimento.php">Listar Certidoes</a>
</body>
</html>