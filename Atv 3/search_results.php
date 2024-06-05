<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Pesquisa</title>
</head>
<body>
    <h2>Resultados da Pesquisa</h2>
    <?php
    // Verifica se a variável de pesquisa está definida na URL
    if (isset($_GET['q'])) {
        $search_term = $_GET['q'];
        echo "Você pesquisou por: <strong>$search_term</strong>";
        // Aqui você pode realizar a lógica de pesquisa real, como consultar um banco de dados
    } else {
        echo "Nenhum termo de pesquisa foi fornecido.";
    }
    ?>
</body>
</html>