<!-- Atividade 9 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Online</title>
</head>
<body>
    <h2>Quiz Online</h2>
    <form action="grade_quiz.php" method="post">
        <p>1. Qual é a capital do Brasil?</p>
        <input type="radio" id="q1_option1" name="q1" value="Brasília" required>
        <label for="q1_option1">Brasília</label><br>
        <input type="radio" id="q1_option2" name="q1" value="Rio de Janeiro">
        <label for="q1_option2">Rio de Janeiro</label><br>
        <input type="radio" id="q1_option3" name="q1" value="São Paulo">
        <label for="q1_option3">São Paulo</label><br><br>

        <p>2. Qual é o maior planeta do sistema solar?</p>
        <input type="radio" id="q2_option1" name="q2" value="Júpiter" required>
        <label for="q2_option1">Júpiter</label><br>
        <input type="radio" id="q2_option2" name="q2" value="Saturno">
        <label for="q2_option2">Saturno</label><br>
        <input type="radio" id="q2_option3" name="q2" value="Terra">
        <label for="q2_option3">Terra</label><br><br>

        <p>3. Qual é o melhor aluno?</p>
        <input type="radio" id="q3_option1" name="q3" value="Douglas" required>
        <label for="q3_option1">Douglas</label><br>
        <input type="radio" id="q3_option2" name="q3" value="Raul">
        <label for="q3_option2">Raul</label><br>
        <input type="radio" id="q3_option3" name="q3" value="Fabio">
        <label for="q3_option3">Fabio</var></label><br><br>

        <input type="submit" value="Enviar Respostas">
    </form>
</body>
</html>