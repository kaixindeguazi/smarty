<?php
	require_once("./include/smarty_inc.php");
	$username = $_POST['name'];
	$password = md5($_POST['password']);
	$db = include("db.php");
	foreach ($db as $key) {
		if($key['username'] == $username){
			if($key['password'] == $password){
				$_SESSION['user'] = $key['username'];
				echo "<script>
					alert('登陆成功!');
					location.href = 'admin.php';
				</script>";
				exit;
			}
		}
	}
	echo "<script>
		alert('登陆失败!');
		location.href = 'login.php';
	</script>";
	exit;
?>