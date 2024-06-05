<!-- Atividade 4 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Formulário de Contato</title>
</head>
<body>
    <h2>Entre em Contato</h2>
    <form id="formulario-contanto" action="process_contact_form.php" method="post">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Assunto:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Mensagem:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

    <div id="armazenamento"></div>

    <script>
        $(document).ready(function() {
            $('#formulario-contanto').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var name = $('#name').val();
                var email = $('#email').val();
                var subject = $('#subject').val();
                var message = $('#message').val();
                

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'process_contact_form.php',
                    data: {
                        name: name,
                        email: email,
                        subject: subject,
                        message: message
                    },
                    success: function(fabio) {
                        $('#armazenamento').html(fabio);
                    },
                    error: function(xhr, status, error) {
                        $('#armazenamento').html('Erro: ' + error);
                    }
                });
            });
        });
    </script>
</body>
</html>