<!-- Atividade 7 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Eventos</title>
</head>
<body>
    <h2>Registro de Eventos</h2>
    <form action="process_event_registration.php" method="post">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="event_of_interest">Evento de Interesse:</label><br>
        <select id="event_of_interest" name="event_of_interest" required>
            <option value="workshop">Workshop</option>
            <option value="palestra">Palestra</option>
            <option value="conferencia">Conferência</option>
            <option value="curso">Curso</option>
        </select><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
