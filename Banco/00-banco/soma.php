<?php 
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];

    $num1 = intval($num1); // Exemplo: "10" -> 10
    $num2 = intval($num2);

    $valido = true;

    if ($num1 <= 0) {
    echo "<b>Número 1 inválido!</b><br>";
    $valido = false;
    }

    if ($num2 <= 0) {
    echo "<b>Número 2 inválido!</b><br>";
    $valido = false;
    }
    $con = new mysqli("localhost", "root", "", "devweb2");

    if ($valido) {

        $stmt = $con->prepare("insert into soma(numero1, numero2, resultado) values (?, ?, ?)");

        $resultado = $num1 + $num2;

        $stmt->bind_param("iii", $num1, $num2, $resultado);

        $stmt->execute();
        echo "<b>$num1 + $num2 = $resultado gravado com sucesso!</b><br>";

        $stmt->close();
        }
        echo "<hr>";

        $stmt = $con->prepare("select * from soma order by id");

        $stmt->execute();

        $result = $stmt->get_result();

        while ($row = $result->fetch_array()) {
        echo "<b>", $row["numero1"], " + ", $row["numero2"], " = ", $row["resultado"], "</b><br>";
        }
        
        $result->close();

        $stmt->close();

        $con->close();
?>