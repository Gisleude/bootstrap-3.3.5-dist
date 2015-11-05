<?php
$query = "SELECT Password FROM usuario WHERE User = '".$_POST['usuario']."'";
$conecta = mysql_connect("localhost", "root", "") or print (mysql_error());
mysql_select_db("usuarios", $conecta) or print(mysql_error());
//print "Conexão e Seleção OK!";
$resultado = mysql_query($query, $conecta) or die ("Falha no query". mysql_error());
$dado = mysql_fetch_array($resultado);
$value = $_POST['usuario'];
	if (htmlspecialchars($_POST['senha']) == $dado[0] ){
		setcookie("user", $value, time()+3600);
  		header("location:person.php");
}
	else{
		header("location:login_error.html");
	}
mysql_close($conecta);
?>