<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando a Soma, Diferenca, Produto e Quociente de Dois Numeros-</h1>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        $soma = $numero1 + $numero2;
        $diferenca = $numero1 - $numero2;
        $produto = $numero1 * $numero2;
        $quociente = $numero1 / $numero2;

        echo "<p>Entre os números <strong>$numero1</strong> e <strong>$numero2</strong>:<br>A Soma é <strong>$soma</strong>.<br>A Diferença é <strong>$diferenca</strong>.<br>O produto é <strong>$produto</strong>.<br>O Quociente é <strong>$quociente</strong>.</p>";
    ?>
</body>
</html>
