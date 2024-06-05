<!-- Atividade 5 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>
    <h2>Calculadora Simples</h2>
    <form action="calculate.php" method="post">
        <label for="num1">Número 1:</label><br>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="operation">Operação:</label><br>
        <select id="operation" name="operation" required>
            <option value="add">Adição (+)</option>
            <option value="subtract">Subtração (-)</option>
            <option value="multiply">Multiplicação (*)</option>
            <option value="divide">Divisão (/)</option>
        </select><br><br>

        <label for="num2">Número 2:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <script>
        $()

    </script>
</body>
</html>