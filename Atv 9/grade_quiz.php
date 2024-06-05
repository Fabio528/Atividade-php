<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontuação do Quiz</title>
</head>
<body>
    <h2>Pontuação do Quiz</h2>
    <?php
    // Defina as respostas corretas
    $answers = array(
        "q1" => "Brasília",
        "q2" => "Júpiter",
        "q3" => "Fabio"
    );

    // Inicializa a pontuação
    $score = 0;

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica as respostas e calcula a pontuação
        foreach ($answers as $question => $correct_answer) {
            if (isset($_POST[$question]) && $_POST[$question] === $correct_answer) {
                $score++;
            }
        }

        // Exibe a pontuação
        echo "<p>Você acertou $score de " . count($answers) . " perguntas.</p>";
    } else {
        echo "<p>Erro ao processar o formulário.</p>";
    }
    ?>
</body>
</html>