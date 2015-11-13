<div id="wphead">
<h1><?php echo COMPANY_NAME; ?></h1>
</div>

<div id="user_info"> Bom dia, <b><?php echo $user->nome; ?></b>. [<a href="#">Meus Dados</a>, <a href="#">Op&ccedil;&otilde;es</a>, <a href="sair.php">Sair</a>]</div>
<ul id="adminmenu">
<?php

$sql_menu = "SELECT * FROM pages WHERE submenu='n' AND es_ativo='s'";
if ($user->es_admin=="n")
{
	$sql_menu = $sql_menu . " AND es_admin='n'";
}
if ($user->es_gerenciar=="n")
{
	$sql_menu = $sql_menu . " AND es_gerenciar='n'";
}

$sql_menu = $sql_menu . " order by ordem asc";
//echo $sql_menu;
$menu = $db->get_results($sql_menu);

foreach ($menu as $menu2)
	{

		if ($_GET["menu"] == "" && $menu2->friend_url == "home")
		{
			$varClassMenu = "current";
			$varID_page = $menu2->id;
		}
		elseif ($_GET["menu"] == $menu2->friend_url)
		{
			$varClassMenu = "current";
			$varID_page = $menu2->id;
		}
		else
		{
			$varClassMenu = "";
		}
		
		echo "<a href='?menu=".$menu2->friend_url."' class=$varClassMenu> $menu2->ds</a>";
	}

?>
	
</ul>

<ul id="submenu">
<?php 

if ($_GET["submenu"] == "")
		{
			$varClassSubMenu_static = "current";
		}
else
		{
			$varClassSubMenu_static = "";
		}		
?>
<a href="#" class="<?php echo $varClassSubMenu_static; ?>">Inicial</a>
<?php 

$submenu = $db->get_results("SELECT * FROM pages WHERE submenu='s' AND es_ativo='s' AND id_menu=$varID_page");

foreach ($submenu as $submenu2)
	{
		if ($_GET["submenu"] == $submenu2->friend_url)
		{
			$varClassSubMenu = "current";
		}
		elseif ($_GET["submenu"] == "" && $submenu2->friend_url == "home")
		{
			$varClassSubMenu = "current";
		}
		else
		{
			$varClassSubMenu = "";
		}
		
		echo "<a href='?menu=".$_GET['menu']."&submenu=$submenu2->friend_url' class='$varClassSubMenu'>$submenu2->ds</a>";
	}
?>
</ul>
<div id="minisub"></div>