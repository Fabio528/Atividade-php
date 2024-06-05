<!-- Atividade 6 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback de Produtos</title>
</head>
<body>
    <h2>Feedback de Produtos</h2>
    <form action="process_feedback.php" method="post">
        <label for="product_name">Nome do Produto:</label><br>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for="rating">Avaliação:</label><br>
        <select id="rating" name="rating" required>
            <option value="1">1 estrela</option>
            <option value="2">2 estrelas</option>
            <option value="3">3 estrelas</option>
            <option value="4">4 estrelas</option>
            <option value="5">5 estrelas</option>
        </select><br><br>

        <label for="comments">Comentários:</label><br>
        <textarea id="comments" name="comments" rows="4"></textarea><br><br>

        <input type="submit" value="Enviar Feedback">
    </form>
</body>
</html>