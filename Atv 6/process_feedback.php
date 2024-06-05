<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Feedback</title>
</head>
<body>
    <h2>Resumo do Feedback</h2>
    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os dados do formulário
        $product_name = $_POST['product_name'];
        $rating = $_POST['rating'];
        $comments = $_POST['comments'];

        // Exibe um resumo do feedback recebido
        echo "<p><strong>Nome do Produto:</strong> $product_name</p>";
        echo "<p><strong>Avaliação:</strong> $rating estrela(s)</p>";
        echo "<p><strong>Comentários:</strong> $comments</p>";
    } else {
        echo "Erro ao processar o formulário.";
    }
    ?>
</body>
</html>