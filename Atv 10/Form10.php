<!-- Atividade 10 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Enquete de Preferências</title>
</head>
<body>
    <h2>Enquete de Preferências</h2>
    <div id="options"></div>
    <form id="enquete-preferencia" action="process_poll.php" method="post">
        <p>Qual seu sabor de sorvete predileto?</p>
        <input type="radio" id="option1" name="sorvete" value="cupuaçu" required>
        <label for="option1">cupuaçu</label><br>
        <input type="radio" id="option2" name="sorvete" value="Feijoada">
        <label for="option2">Feijoada</label><br>
        <input type="radio" id="option3" name="sorvete" value="Queijo">
        <label for="option3">Queijo parmesão com pimenta</label><br><br>

        <input type="submit" value="Enviar Voto">
    </form><br>

    <div id="s"></div>

    <script>


        $(document).ready(function() {
            $('#enquete-preferencia').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var sorvete = $("input[type=radio]:checked").val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'process_poll.php',
                    data: {
                        sorvete: sorvete,
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
