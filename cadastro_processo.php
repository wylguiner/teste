<?php 
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$senha1 = $_POST['senha1'];
$senha2 = $_POST['senha2'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$escola = $_POST['escola'];
$periodo = $_POST['periodo'];

$server = "localhost";
$usuario = "root";
$pass = "";
$dbname = "suit";
$conn = mysqli_connect($server,$usuario,$pass,$dbname);


  if($senha1 == $senha2){
      $query = "INSERT INTO estudantes (nome,email,nascimento,senha,telefone,celular,cep,numero,endereco,complemento,cidade,estado,instituicao,periodo) VALUES ('$nome','$email','$nascimento','$senha1','$telefone','$celular','$cep','$numero','$endereco','$complemento','$cidade','$estado','$escola','$periodo')";
      $insert = mysqli_query($conn,$query);
    
      if($insert){
        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
      }
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Senhas incorretas');window.location.href='cadastro.html'</script>";
    }
  
    
?>