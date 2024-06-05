<?php


/*
// Inicializa as opções da enquete
$options = array(
    "cupuaçu" => 0,
    "Feijoada" => 0,
    "Queijo" => 0
);

$resultado = [$options];

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a opção escolhida pelo usuário
    if (isset($_POST['sorvete']) && array_key_exists($_POST['sorvete'], $options)) {
        $selected_option = $_POST['sorvete'];
        // Incrementa o contador da opção escolhida
        $options[$selected_option]++;
    }
}

// Exibe a opção escolhida pelo usuário e um resumo dos resultados atuais
echo "<h2>Resultado da Enquete</h2>";
if (isset($selected_option)) {
    echo "<p>Você escolheu: <strong>$selected_option</strong></p>";
}
echo "<h3>Resumo dos Resultados</h3>";
foreach ($options as $option => $count) {
    echo "<p>$option: $count voto(s)</p>";
}

echo "Ola mundo1";
*/

$s = $_POST['sorvete'];
echo 'Que delicia de sorvete '.$s;
?>