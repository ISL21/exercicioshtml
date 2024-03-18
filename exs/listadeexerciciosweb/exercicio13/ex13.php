<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>-Calculando Salario de Vendedor-</h1>
    <?php
        $nome = $_POST["nome"];
        $salario = $_POST["salario"];
        $vendas = $_POST["vendas"];
        $comissao = 0.15 * $vendas;

        $salarioNovo = $salario + $comissao;

        echo "<p>Considerando que o Vendedor $nome recebe uma comissão de 15% e teve o total de $vendas vendas, seu salário final será de R$$salarioNovo</p>";
    ?>
</body>
</html>
