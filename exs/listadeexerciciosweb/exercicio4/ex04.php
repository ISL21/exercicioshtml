<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando a Diferenca entre Dois Numeros-</h1>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $diferenca = $numero1 - $numero2;
        echo "<p>A direfença entre os números <strong>$numero1</strong> e <strong>$numero2</strong> é <strong>$diferenca</strong>.</p>";
    ?>
</body>
</html>
