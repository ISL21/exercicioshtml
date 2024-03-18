<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando a Media Ponderada entre 3 Notas-</h1>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];

        $mediaPonderada = (1 * $numero1 + 2 * $numero2 + 3 * $numero3) / (1 + 2 + 3);

        echo "<p>A Média (considerando pesos 1, 2 e 3 respectivamente para cada nota) é: <strong>$mediaPonderada</strong></p>";
    ?>
</body>
</html>
