<?php
$user = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];
$query = 'INSERT INTO usuario(User, Password, Email) VALUES ("'.$user.'", "'.$password.'", "'.$email.'")';
$conecta = mysql_connect("localhost", "root", "") or print (mysql_error());
mysql_select_db("usuarios", $conecta) or print(mysql_error());
print "Conexão e Seleção OK!";
$resultado = mysql_query($query, $conecta) or die ("Falha no query". mysql_error());
mysql_close($conecta);
?>