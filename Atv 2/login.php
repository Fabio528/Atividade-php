<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // Arquivo de conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "banco_fabio";
    
    // Criando uma conexão com o banco de dados
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    
    // Verificando a conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação de usuário e senha (substitua pelos seus próprios dados)
    $usuario_correto = "admin";
    $senha_correta = "1234";

    // Obtém os dados do formulário
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM clientes WHERE email='$email' AND senha='$password'";
if($resultado = $conn->query($sql) ==FALSE){
    echo "Erro no banco" . $conn->error;
}

    if(count($resultado)==1){
        echo "Autenticado";
    }else{
        echo "Nome de usuario ou senha invalido";
    }


    // Verifica se o usuário e senha estão corretos
    if ($username === $usuario_correto && $password === $senha_correta) {
        // Login bem-sucedido
        echo "Login bem-sucedido. Bem-vindo, $username!";
    } else {
        // Login falhou
        echo "Usuário ou senha incorretos. Tente novamente.";
    }
}
?>