<?php
session_start();
include('verifica_login.php')
?> 

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/carousel.css">

     <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <title>SUIT</title>
</head>

<body id="page-top" class="index">

    <!-- Navegação -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-shrink">
        <div class="container">
            <a class="navbar-brand" href="index.html">SUIT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <span class="navbar-text" style="color: white";>
                        Olá <?php echo $_SESSION['nome']; ?> <!-- Puxa a sessão -->
                    </span>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cabeçalho -->
    <section class="bg-light" id="infos">
        <div class="container">
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#dados" role="tab" aria-controls="home" aria-selected="true">Dados</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#transportes" role="tab" aria-controls="profile" aria-selected="false">Transportes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#mensagens" role="tab" aria-controls="contact" aria-selected="false">Mensagens</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent"> <!-- Conteúdo das TABS --> 
                <div class="tab-pane fade show active" id="dados" role="tabpanel" aria-labelledby="home-tab"> <!-- Conteúdo da TAB 1 -->    
                    <form method="POST" action="cadastro_processo.php" id="">  
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Nome">Nome Completo</label>
                                <input type="name" name="nome" class="form-control" id="Nome" value="<?php echo $_SESSION['nome']?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Email">Email</label>
                                <input type="email" name="email" class="form-control" id="Email" value="<?php echo $_SESSION['email']?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="DataNascimento">Data de Nascimento</label>
                                <input type="date" name="nascimento"class="form-control" id="DataNascimento" value="<?php echo $_SESSION['nascimento']?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="Senha">Nova Senha</label>
                                <input type="password" name="senha1" class="form-control" id="Senha" placeholder="Digite sua nova senha">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ConfirmaSenha">Confirme a Nova Senha</label>
                                <input type="password" name="senha2" class="form-control" id="Senha2" placeholder="Digite sua nova senha novamente">
                            </div>                
                            <div class="form-group col-md-3 col">
                                <label for="Telefone">Telefone</label>
                                <input type="text" name="telefone" class="form-control" id="Telefone" value="<?php echo $_SESSION['telefone']?>">
                            </div>
                            <div class="form-group col-md-3 col">
                                <label for="Celular">Celular</label>
                                <input type="text" name="celular" class="form-control" id="Celular" value="<?php echo $_SESSION['celular']?>">
                            </div>
                        </div>    
                        <div class="form-row">
                            <div class="form-group col-md-2 col">
                                <label for="CEP">CEP</label>
                                <input type="text" name="cep" class="form-control" id="CEP" value="<?php echo $_SESSION['cep']?>">
                            </div>
                            <div class="form-group col-md-2 col">
                                <label for="Numero">Número</label>
                                <input type="number" name="numero" class="form-control" id="Numero" value="<?php echo $_SESSION['numero']?>">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="Endereço">Endereço</label>
                                <input type="text" name="endereco" class="form-control" id="Endereco" value="<?php echo $_SESSION['endereco']?>"  >
                            </div>  
                            <div class="form-group col-md-4 ">
                                <label for="Complemento">Complemento</label>
                                <input type="text" name="complemento" class="form-control" id="Complemento" value="<?php echo $_SESSION['complemento']?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 col">
                                <label for="Cidade">Cidade</label>
                                <input type="text" name="cidade" class="form-control" id="Cidade" value="<?php echo $_SESSION['cidade']?>">
                            </div>
                            <div class="form-group col-md-2 col">
                                <label for="Estado">Estado</label>
                                <input type="text" name="estado" class="form-control" id="Estado" value="<?php echo $_SESSION['estado']?>">
                            </div>                
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" id="botao">Cadastrar</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="transportes" role="tabpanel" aria-labelledby="profile-tab">
                    teste 2
                </div>
                <div class="tab-pane fade" id="mensagens" role="tabpanel" aria-labelledby="contact-tab">
                    teste3
                </div>
              </div>
        </div>
    </section>


    

   
    <!-- Footer --> 
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; SUIT 2018</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Políticas de Privacidade</a>
                        </li>
                        <li class="list-inline-item"><a href="#">Termos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="JS/suit.js"></script>
    <script src="JS/classie.js"></script>
</body>
</html>