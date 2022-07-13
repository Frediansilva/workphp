<?php
session_start();
include_once("seguranca.php");
include_once("conexao.php");
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

    <title>Administrativo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
</head>

<body role="document">
<?php
include_once("menu_admin.php");
$resultado=mysql_query("SELECT * FROM cadastro ORDER BY 'id'");
$linhas=mysql_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Lista de mensagem</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>mensagem</th>
                    <th>site</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($linhas = mysql_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$linhas['id']."</td>";
                    echo "<td>".$linhas['nome']."</td>";
                    echo "<td>".$linhas['categoria']."</td>";
                    echo "<td>".$linhas['mensagem']."</td>";
                    echo "<td>".$linhas['site']."</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                    <ul aria-labelledby="notifications" class="dropdown-menu">
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                                <div class="notification d-flex justify-content-between">
                                    <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                                    <div class="notification-time"><small>fredian ago</small></div>
                                </div></a></li>
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                                <div class="notification d-flex justify-content-between">
                                    <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                </div></a></li>
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                                <div class="notification d-flex justify-content-between">
                                    <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                </div></a></li>
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                                <div class="notification d-flex justify-content-between">
                                    <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                    <div class="notification-time"><small>10 minutes ago</small></div>
                                </div></a></li>
                        <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                    </ul>
                </li>
            </table>
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
