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
    // Importo os scripts
    require_once("ContaCorrente.php");
    require_once("ContaPoupanca.php");
    require_once("Moeda.php");

    // Crio uma conta corrente e faço algumas operações
    echo "** CONTA CORRENTE **<br>";
    $conta_corrente = new ContaCorrente(123456, "Fernando");
    echo Moeda::formata_moeda($conta_corrente->get_classe()), "<br>";
    echo $conta_corrente->sacar(100), "<br>";
    echo Moeda::formata_moeda($conta_corrente->get_classe()), "<br>";
    echo $conta_corrente->depositar(1000), "<br>";
    echo Moeda::formata_moeda($conta_corrente->get_classe()), "<br>";
    echo $conta_corrente->sacar(500), "<br>";
    echo Moeda::formata_moeda($conta_corrente->get_classe()), "<br>";
    $conta_corrente->muda_gold();
    echo $conta_corrente->get_classe(), "<br>";
    echo Moeda::formata_moeda($conta_corrente->get_classe()), "<br>";
    echo "<br>";

    // Crio uma conta poupança e faço algumas operações
    echo "** CONTA POUPANÇA **<br>";
    $conta_poupanca = new ContaPoupanca(456789, "João");
    echo Moeda::formata_moeda($conta_poupanca->dd()), "<br>";
    echo $conta_poupanca->depositar(5000), "<br>";
    echo Moeda::formata_moeda($conta_poupanca->dd()), "<br>";
    echo $conta_poupanca->sacar(3000), "<br>";
    echo Moeda::formata_moeda($conta_poupanca->dd()), "<br>";
    echo $conta_poupanca->sacar(3000), "<br>";
    echo Moeda::formata_moeda($conta_poupanca->dde()), "<br>";
    echo $conta_poupanca->aplicarJuros(), "<br>";
    echo Moeda::formata_moeda($conta_poupanca->get_classe()), "<br>";
?>
</body>
</html>