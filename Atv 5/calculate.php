<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Calculadora</title>
</head>
<body>
    <h2>Resultado da Calculadora</h2>
    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os dados do formulário
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Processa a operação selecionada
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                echo "Resultado da adição: $result";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "Resultado da subtração: $result";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "Resultado da multiplicação: $result";
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "Resultado da divisão: $result";
                } else {
                    echo "Erro: divisão por zero!";
                }
                break;
            default:
                echo "Operação inválida.";
                break;
        }
    } else {
        echo "Erro ao processar o formulário.";
    }
    ?>
</body>
</html>