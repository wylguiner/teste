<?php
session_start(); // Preparar o início da sessão

include('conexao.php'); // Inclui a variável de conexão do banco

if(empty($_POST['email']) || empty($_POST['senha'])) { // Teste para
    header('location: entrar.html');                   // confirmar
    exit();                                            // se os campos
}                                                      // estão preenchidos

$email = mysqli_real_escape_string($conn, $_POST['email']); // Pega campo email do form
$senha = mysqli_real_escape_string($conn, $_POST['senha']); // Pega o campo senha do form

$query = "SELECT * FROM estudantes WHERE email = '{$email}' AND senha = '{$senha}'"; // Faz a query de select no banco

$result = mysqli_query($conn, $query);  // Final do select

$dados = mysqli_fetch_array($result);    // Cria um array com os dados buscados

$nomeLogado = $dados['nome']; // Pega o campo nome do email logado
$emailLogado = $dados['email']; // Pega o campo email do email logado
$nascimentoLogado = $dados['nascimento']; // Pega o campo nascimento do email logado
$telefoneLogado = $dados['telefone']; // Pega o campo telefone do email logado
$celularLogado = $dados['celular']; // Pega o campo celular do email logado
$cepLogado = $dados['cep']; // Pega o campo cep do email logado
$numeroLogado = $dados['numero']; // Pega o campo numero do email logado
$enderecoLogado = $dados['endereco']; // Pega o campo endereco do email logado
$complementoLogado = $dados['complemento']; // Pega o campo complemento do email logado
$cidadeLogado = $dados['cidade']; // Pega o campo cidade do email logado
$estadoLogado = $dados['estado']; // Pega o campo estado do email logado

$row = mysqli_num_rows($result); // Validação que encontrou dado no banco

if ($row == 1) {
    $_SESSION['nome'] = $nomeLogado; // Cria a sessão
    $_SESSION['email'] = $emailLogado; // Pega email do usuário logado
    $_SESSION['nascimento'] = $nascimentoLogado; // Pega data de nascimento do usuário logado
    $_SESSION['telefone'] = $telefoneLogado; // Pega telefone do usuário logado
    $_SESSION['celular'] = $celularLogado; // Pega celular do usuário logado
    $_SESSION['cep'] = $cepLogado; // Pega cep do usuário logado
    $_SESSION['numero'] = $numeroLogado; // Pega numero do usuário logado
    $_SESSION['endereco'] = $enderecoLogado; // Pega endereco do usuário logado
    $_SESSION['complemento'] = $complementoLogado; // Pega complemento do usuário logado
    $_SESSION['cidade'] = $cidadeLogado; // Pega cidade do usuário logado
    $_SESSION['estado'] = $estadoLogado; // Pega estado do usuário logado
    header('location: paginaUsuario.php'); // Entra na página do usuário
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location: entrar.php'); // Se não der, volta para o login
    exit();
}


?>