<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando a Idade daqui a 30 Anos-</h1>
    <?php
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        $idade30anos = $idade + 30;

        echo "Daqui a 30 anos, <strong>$nome</strong> terá <strong>$idade30anos</strong> anos.</p>";
    ?>
</body>
</html>
