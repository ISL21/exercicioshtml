<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando o Dobro de um Numero-</h1>
    <?php
        $numero = $_POST["numero"];
        $dobro = $numero * 2;
        echo "<p>O dobro do número <strong>$numero</strong> é <strong>$dobro</strong>.</p>";
    
    ?>
</body>
</html>
