<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Titulo-->
  <title>DiagPre</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Logo -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">DiagPre</a>
      </div>

      <!-- Menu -->
      <ul class="nav navbar-nav navbar">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="active">Diagnóstico<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="diagnostic.php">Diagnóstico</a></li>
            <li><a href="lastDiagnostic.php">Ultimo Diagnóstico</a></li>
          </ul>
        </li>
      </ul>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar">
          <li class="active"><a href="fastHospitals.php">Hospitais próximos</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="form-group">
            <input type="text" class="form-control" placeholder="O que você está sentindo?">
          </div>
          &nbsp; <button type="submit" class="btn btn-default">Procurar</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bem vindo, <?php echo $_COOKIE["user"];?><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="edit_Perfil.php">Perfil</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="login.html">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63509.832732069866!2d-35.24829067281184!3d-5.804081625253159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shospitais+em+Natal%2Crn!5e0!3m2!1spt-BR!2sbr!4v1448377316166" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


  <!--
  Não Mecher Aqui em Baixo
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
