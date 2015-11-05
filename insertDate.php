<?php
$user = $_POST['user'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$email = $_POST['email'];
$confirmEmail = $_POST['confirmEmail'];
if($_POST['password'] == $_POST['confirmPassword']){
	if($_POST['email'] == $_POST['confirmEmail']){
		$query = 'INSERT INTO usuario(User, Password, Email) VALUES ("'.$user.'", "'.$password.'", "'.$email.'")';
		$conecta = mysql_connect("localhost", "root", "") or print (mysql_error());
		mysql_select_db("usuarios", $conecta) or print(mysql_error());

		$resultado = mysql_query($query, $conecta) or die ("Falha no query". mysql_error());
		header("location:form_sucess.html");
		mysql_close($conecta);
	}
	else{
		header("location:form_emailerror.html");
	}
}
else{
	header("location:form_passworderror.html");
}
?>