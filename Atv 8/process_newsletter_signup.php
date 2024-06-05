<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Inscrição em Newsletter</title>
</head>
<body>
    <h2>Confirmação de Inscrição em Newsletter</h2>
    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o e-mail do formulário
        $email = $_POST['email'];

        // Aqui você pode adicionar a lógica para salvar o e-mail em um banco de dados, enviar um e-mail de confirmação, etc.
        // Neste exemplo, apenas exibimos uma mensagem de confirmação
        echo "<p>O e-mail <strong>$email</strong> foi inscrito com sucesso na newsletter. Obrigado!</p>";
    } else {
        echo "<p>Erro ao processar o formulário. Por favor, tente novamente mais tarde.</p>";
    }
    ?>
</body>
</html>
