<?php
	require_once("./include/smarty_inc.php");
	if(!isset($_SESSION['user'])){
		echo "<script>
			alert('请登录！');
			location.href = 'login.php';
		</script>";
		exit;
	}
	$smarty->display("admin.html")
?>