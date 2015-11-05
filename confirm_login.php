<?php
	if (htmlspecialchars($_POST['usuario']) == 'Gisleude' && htmlspecialchars($_POST['senha'] == 'gis995511') ){
  		header("location:person.html");
}
	else{
		header("location:login_error.html");
	}
?>