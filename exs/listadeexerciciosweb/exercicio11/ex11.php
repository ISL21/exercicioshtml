<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando a Area de um Circulo-</h1>
    <?php
        $raio = $_POST["raio"];

        $area = M_PI * $raio * $raio;

        echo "<p>A área do círculo é igual a: $area</p>";
    ?>
</body>
</html>
