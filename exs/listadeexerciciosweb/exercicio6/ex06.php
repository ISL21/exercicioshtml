<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando a Soma dos Dois Primeiros Numeros e Multiplicando pelo Terceiro Numero-</h1>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];

        $soma = $numero1 + $numero2;
        $produto = $soma * $numero3;

        echo "<p>A Soma entre os números <strong>$numero1</strong> e <strong>$numero2</strong> é <strong>$soma</strong>.<br>
        O valor da soma entre os números <strong>$numero1</strong> e <strong>$numero2</strong> multiplicado por <strong>$numero3</strong> é <strong>$produto</strong>.</p>";
    ?>
</body>
</html>