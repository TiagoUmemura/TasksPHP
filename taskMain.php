<?php
    if (!isset($_SESSION)) session_start();

    if (!isset($_SESSION['UsuarioNome'])) {
      session_destroy();
      
      // Redireciona o visitante de volta pro login
      header("Location: index.html"); exit;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tasks</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Tasks</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#cadastrar_task">Cadastrar</a></li>
              <li><a href="#alterar_task">Alterar</a></li>
              <li><a href="#remover_task">Remover</a></li>
              <li><a href="#listar_task">Listar</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <hr>
        <hr>
    </div>

    <div class="container well" id="tasks">
        <h4>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</h4>
        <form name="logout" id="logout" action="logout.php" method="post" novalidate>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-block">Logout</button>
                </div>
            </div>
        </form>
    </div>

      <div class="container well" id="cadastrar_task">
        <h4>Cadastrar Task</h4>
        <form name="cadastro" id="cadastro" action="cadastroTask.php" method="post" enctype="multipart/form-data" novalidate>
            <div class="row">
              <div class="form-group col-md-6 col-md-offset-3">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" id="codigo" name="codigo">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 col-md-offset-3">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 col-md-offset-3">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 col-md-offset-3">
                <label for="arquivo">Arquivo Anexo:</label>
                <input type="file" name="arquivo" id="arquivo">
              </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-block">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container well" id="alterar_task">
        <h4>Alterar Task</h4>
        <form name="alteracao" id="alteracao" action="alteracaoTask.php" method="post" enctype="multipart/form-data" novalidate>
            <div class="row">
              <div class="form-group col-md-6 col-md-offset-3">
                <label for="codigo_alterar">Código:</label>
                <input type="text" class="form-control" id="codigo_alterar" name="codigo_alterar">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 col-md-offset-3">
                <label for="nome_alterar">Nome:</label>
                <input type="text" class="form-control" id="nome_alterar" name="nome_alterar">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 col-md-offset-3">
                <label for="descricao_alterar">Descrição:</label>
                <input type="text" class="form-control" id="descricao_alterar" name="descricao_alterar">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 col-md-offset-3">
                <label for="arquivo_alterar">Arquivo Anexo:</label>
                <input type="file" name="arquivo_alterar" id="arquivo_alterar">
              </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-block">Alterar</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container well" id="remover_task">
        <h4>Remover Task</h4>
        <form name="remocao" id="remocao" action="remocaoTask.php" method="post" enctype="multipart/form-data" novalidate>
            <div class="row">
              <div class="form-group col-md-6 col-md-offset-3">
                <label for="codigo_remover">Código:</label>
                <input type="text" class="form-control" id="codigo_remover" name="codigo_remover">
              </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-block">Remover</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container well" id="listar_task">
        <h4>Listar Tasks</h4>
        <form name="listar" id="listar" action="listarTasks.php" method="get" enctype="multipart/form-data" novalidate>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-block">Listar</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>

<?php

?>