<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form action="salvar_motor.php" method="POST">
        <p>
            Modelo:
            <input type="text" name="modelo">
        </p>

        <p>
            Número Série:
            <input type="text" name="numero_serie">
        </p>

        <p>
            Potencia:
            <input type="number" name="potencia">
        </p>

        <p><button>Enviar</button></p>
    </form>

    <a href="listar_motores.php">Listar motores</a>
</body>
</html>