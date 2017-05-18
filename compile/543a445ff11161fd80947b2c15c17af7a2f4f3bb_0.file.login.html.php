<?php
/* Smarty version 3.1.30, created on 2017-05-18 07:06:18
  from "D:\phpStudy\WWW\smarty\tpl\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591d47ea6d9219_98428946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '543a445ff11161fd80947b2c15c17af7a2f4f3bb' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty\\tpl\\login.html',
      1 => 1495091176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591d47ea6d9219_98428946 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>豪哥哥~~</title>
</head>
<body>
      	<form action="user_login.php" method="post">
      	<table>
	      	<tr>
	      		<td>用户名：</td>
	      		<td><input type="text" name="name"></td>
	      	</tr>
	      	<tr>
	      		<td>密码:</td>
	      		<td><input type="password" name="password"></td>
	      	</tr>
	      	<tr>
	      		<td colspan="2"><input type="submit"></td>
	      	</tr>
      	</table>
      </form>
</body>
</html>
<?php }
}
