<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando Prestacao em Atraso-</h1>
    <?php
        $valor = $_POST["valor"];
        $taxa = $_POST["taxa"];
        $tempo = $_POST["tempo"];

        $prestacao = $valor + (($valor * $taxa / 100) * $tempo);

        echo "<p>O valor da prestação em atraso será de: R$ $prestacao</p>";
    ?>
</body>
</html>
