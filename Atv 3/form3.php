<!-- Atividade 3 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Formulário de Pesquisa</title>
</head>
<body>
    <h2>Pesquisar</h2>
    <form id="formulario-pesquisa" action="search_results.php" method="get">
        <label for="search_term">Digite sua pesquisa:</label><br>
        <input type="text" id="search_term" name="q"><br><br>
        <input type="submit" value="Pesquisar">
    </form>

    <div id="armazenamento"></div>


    <script>
        $(document).ready(function() {
            $('#formulario-pesquisa').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var search_term = $('#search_term').val();
                

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'GET',
                    url: 'search_results.php',
                    data: {
                        q: search_term,
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