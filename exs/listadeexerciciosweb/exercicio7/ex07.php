<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando a Media Aritmetica entre 3 Notas-</h1>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];

        $media = ($numero1 + $numero2 + $numero3) / 3;

        echo "<p>A Média é: <strong>$media</strong></p>";
    ?>
</body>
</html>
