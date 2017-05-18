<?php 
	require_once("./include/smarty_inc.php");
	// echo red('李福豪');
	$_SESSION['ss'] = 'session';
	$smarty->assign('hh','haha');
	$smarty->display("index.html");
?>