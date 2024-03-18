<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando a Metade de um Numero-</h1>
    <?php
        $numero = $_POST["numero"];
        $metade = $numero / 2;
        echo "<p>A metade do número <strong>$numero</strong> é <strong>$metade</strong>.</p>";
    ?>
</body>
</html>
