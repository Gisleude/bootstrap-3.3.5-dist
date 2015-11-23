<?php
header('Content-Type: text/html;  charset=utf-8',true);
$db = @mysql_connect("localhost", "root","") or die("Ocorreu o seguine erro na conexão: ".mysql_error());
@mysql_select_db("doencas", $db) or die("Ocorreu o seguinte erro na seleção do db: ".mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query('SET description=utf8');

?>
