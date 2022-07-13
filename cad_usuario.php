<?php
	session_start();
	include_once("seguranca.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="Cesar">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Cadastrar Usuário</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body role="document">
	<?php
		include_once("menu_admin.php");		
	?>	
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Cadastrar Usuário</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="processa/proc_cad_usuario.php">
		  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" name="email" placeholder="E-mail">
				</div>
			  </div>

			  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="usuario" placeholder="Usuário">
                  </div>
              </div>

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Categoria</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="Categoria" placeholder="Categoria">
                  </div>
              </div>
			  
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" name="senha" placeholder="Senha">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Nivel de Acesso</label>
				<div class="col-sm-10">
				  <select class="form-control" name="nivel_de_acesso">
					  <option value="1">Administrativo</option>
					  <option value="2">Usuário</option>
					</select>
				</div>
			  </div>
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-success">Cadastrar</button>
				</div>
			  </div>
			</form>
        </div>
		</div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
