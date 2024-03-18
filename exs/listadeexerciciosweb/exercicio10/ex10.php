<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Reajustando Salario-</h1>
    <?php
        $salario = $_POST["salario"];

        $reajuste = 0.10;
        $salarioNovo = $salario + ($salario*$reajuste);

        echo "<p>Com um reajuste de <strong>10%</strong>, o Salário de <strong>$salario</strong> será: R$ <strong>$salarioNovo</strong></p>";
    ?>
</body>
</html>
