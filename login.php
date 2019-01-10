<?php
session_start(); // Preparar o início da sessão

include('conexao.php'); // Inclui a variável de conexão do banco

if(empty($_POST['email']) || empty($_POST['senha'])) { // Teste para
    header('location: entrar.html');                   // confirmar
    exit();                                            // se os campos
}                                                      // estão preenchidos

$email = mysqli_real_escape_string($conn, $_POST['email']); // Pega campo email do form
$senha = mysqli_real_escape_string($conn, $_POST['senha']); // Pega o campo senha do form

$query = "SELECT nome FROM estudantes WHERE email = '{$email}' AND senha = '{$senha}'"; // Faz a query de select no banco

$result = mysqli_query($conn, $query);  // Final do select

$dado = mysqli_fetch_array($result);    // Cria um array com os dados buscados

$nome = $dado['nome']; // Pega o campo nome do email logado

$row = mysqli_num_rows($result); // Validação que encontrou dado no banco

if ($row == 1) {
    $_SESSION['nome'] = $nome; // Cria a sessão
    header('location: paginaUsuario.php'); // Entra na página do usuário
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location: entrar.php'); // Se não der, volta para o login
    exit();
}


?>