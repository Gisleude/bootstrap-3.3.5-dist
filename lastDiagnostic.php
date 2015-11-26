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
        <li class="dropdown" class="active">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diagnóstico<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="diagnostic.php">Diagnóstico</a></li>
            <li class="active"><a href="lastDiagnostic.php">Ultimo Diagnóstico</a></li>
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
              <li><a href="edit_Perfil.php">Perfil</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="login.html">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Mecanismo de busca -->

  <?php
  if(isset($_POST['botao'])){
    $busca = $_POST['search'];

    if($busca == '' or $busca == " "){
      echo '<br><center><img src="houston.png"></center><br><br><center><h4>A sua busca está em branco.</h2></center>';
      }else{
        $busca_dividida = explode(',', $busca);
        $quant = count($busca_dividida);
        $id_mostrado = array("");

        for($i=0; $i < $quant; $i++){
          $pesquisa = $busca_dividida[$i];

          $sql = mysql_query("SELECT * FROM doenca WHERE tags LIKE '%$pesquisa%' ");
          $quant_campos = mysql_num_rows($sql);
          if ($quant_campos == 0){
            echo '<br><center><img src="houston.png"></center><br><br><center><h3>Nenhuma doença encontrada com esses sintomas.</h3></center>';
          }
          else{
            while($linha = mysql_fetch_array($sql)){
              $id = $linha['ID'];
              $image = $linha['image'];
              $name = $linha['name'];
              $subname = $linha['subname'];
              $tags = $linha['tags'];
              $description = $linha['description'];
              $cause = $linha['cause'];
              $tratament = $linha['tratament'];
              $medicaments = $linha['medicaments'];
              $prevetion = $linha['prevetion'];
            }
            ?>

            <!-- Container de Descrições da doença -->

            <center>
              <?php
              if(!array_search($id, $id_mostrado)){?>
                <div class="row">
                  <div class="col-sm-6 col-md-8 col-md-offset-2">
                    <div class="thumbnail">
                      <div class="caption">
                        <div class="dropdown">
                          <center><img src="<?php echo $image; ?>" width="200" height="144"></center>
                          <?php
                          echo "<center><h3>".$name."</h3><p>Se você está com essa doença, pode estar sentindo esses outros sintomas também:<br><b>".$subname."</b></p>";?>
                            <a class="dropdown-toggle js-toggle-content" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Saiba mais <span class="caret"></span></a>
                            <ul class="dropdown-menu my-content">
                              <li>
                                <div class="panel panel-success">
                                  <div class="panel-heading"><h4>Descrição</h4></div>
                                  <div class="panel-body">
                                    <?php
                                    echo"<p>".$description."</p>";
                                    ?>
                                  </div>
                                </div>
                                <div class="panel panel-success">
                                  <div class="panel-heading"><h4>Causas</h4></div>
                                  <div class="panel-body">
                                    <?php
                                    echo"<p>".$cause."</p>";
                                    ?>
                                  </div>
                                </div>
                                <div class="panel panel-success">
                                  <div class="panel-heading"><h4>Tratamento</h4></div>
                                  <div class="panel-body">
                                    <?php
                                    echo"<p>".$tratament."</p>";
                                    ?>
                                  </div>
                                </div>
                                <div class="panel panel-success">
                                  <div class="panel-heading"><h4>Medicamentos</h4></div>
                                  <div class="panel-body">
                                    <?php
                                    echo"<p>".$medicaments."</p>";
                                    ?>
                                  </div>
                                </div>
                                <div class="panel panel-success">
                                  <div class="panel-heading"><h4>Prevenção</h4></div>
                                  <div class="panel-body">
                                    <?php
                                    echo"<p>".$prevetion."</p>";
                                    array_push($id_mostrado, "$id");
                                  }
                                  ?>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </center>
              <?php
            }
          }
        }
      }
      ?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <center><div>
          <a href="https://docs.google.com/forms/d/1hqb9mdxw_DTK91dsD5aWvT5xpT6Ukx93iieYA6nnS7Y/viewform"><button id="editPass" name="editPass" class="btn btn-warning">Faça uma avaliação do site!</button></a>
        </div></center>
  <!--
  Não Mecher Aqui em Baixo
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
