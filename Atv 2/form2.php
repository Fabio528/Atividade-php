<!-- Atividade 2 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Formulário de Login</title>
</head>
<body>
    <h2>Formulário de Login</h2>
    <form id="formulario-login" action="login.php" method="post">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form><br>

    <div id="s"></div>

    <script>


        $(document).ready(function() {
            $('#formulario-login').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
		
                var username = $('#username').val();
                var password = $('#password').val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: {
                        username: username,
                        password: password

                    },
                    success: function(response) {
                        $('#s').html(' ' + response);

                    },
                    error: function(xhr, status, error) {
                        $('#s').html('Erro: ' + error);
                    }
                });
            });
        });
    </script>
</body>
</html>