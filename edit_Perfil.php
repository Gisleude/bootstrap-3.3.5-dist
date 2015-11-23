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
          <li><a href="fastHospitals.php">Hospitais próximos</a></li>
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
              <li class="active"><a href="edit_Perfil.php">Perfil</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="login.html">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Formulário de Edição -->

<form class="form-horizontal" action="edit_User.php">
<fieldset>
<center>
<div class="form-group">
  <label class="col-md-4 control-label" for="firstUser">Usuário</label>
  <div class="col-md-4">
  <input id="firstUser" name="firstUser" type="text" placeholder="Digite o seu Usuário Atual" class="form-control input-md">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="newUser">Novo Usuário</label>
  <div class="col-md-4">
  <input id="newUser" name="newUser" type="text" placeholder="Digite o seu Novo Usuário" class="form-control input-md">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="editUser"></label>
  <div class="col-md-4">
    <button id="editUser" name="editUser" class="btn btn-primary">Modificar Usuário</button>
  </div>
</div>

</form>
<form class="form-horizontal" action="edit_Pass.php">
<div class="form-group">
  <label class="col-md-4 control-label" for="firstPass">Senha</label>
  <div class="col-md-4">
    <input id="firstPass" name="firstPass" type="password" placeholder="Digite sua Senha Atual" class="form-control input-md">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="newPass">Nova Senha</label>
  <div class="col-md-4">
    <input id="newPass" name="newPass" type="password" placeholder="Digite sua Nova Senha" class="form-control input-md">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="editPass"></label>
  <div class="col-md-4">
    <button id="editPass" name="editPass" class="btn btn-primary">Modificar Senha</button>
  </div>
</div>
</form>

<form class="form-horizontal" action="edit_Email.php">
<div class="form-group">
  <label class="col-md-4 control-label" for="firstEmail">E-mail</label>
  <div class="col-md-4">
  <input id="firstEmail" name="firstEmail" type="text" placeholder="Digite o seu E-mail Atual" class="form-control input-md">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="newEmail">Novo E-mail</label>
  <div class="col-md-4">
  <input id="newEmail" name="newEmail" type="text" placeholder="Digite o seu Novo E-mail" class="form-control input-md">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="editEmail"></label>
  <div class="col-md-4">
    <button id="editEmail" name="editEmail" class="btn btn-primary">Modificar E-mail</button>
  </div>
</div>
</center>
</fieldset>
</form>


  <!--
  Não Mecher Aqui em Baixo
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
