<?php 
	include("./smarty/Smarty.class.php");
	include("function/function.php");
	$smarty = new Smarty();
	$smarty->caching = false;
	$smarty->setConfigDir("./configs");
	$smarty->template_dir = "./tpl";
	//$smarty->setTemplateDir("../tpl");
	$smarty->compile_dir = "./compile";
	//$smarty->setCompileDir("../compile");
	$smarty->cache_dir="./cache";
	//$smarty->setCacheDir("../cache");
	session_start();
?>