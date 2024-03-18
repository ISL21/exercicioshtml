<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando a Soma de Dois Numeros-</h1>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $soma = $numero1 + $numero2;
        echo "<p>A soma dos números <strong>$numero1</strong> e <strong>$numero2</strong> é <strong>$soma</strong>.</p>";
    ?>
</body>
</html>
