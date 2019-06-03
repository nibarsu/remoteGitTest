<?php /* Smarty version Smarty-3.1.18, created on 2019-05-31 17:09:55
         compiled from "/var/www/erp/templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:8541941905cf0e2e804e3d4-78246782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ec9c4d11b685a246b6b232905c90713677afa5' => 
    array (
      0 => '/var/www/erp/templates/login.html',
      1 => 1559293794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8541941905cf0e2e804e3d4-78246782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cf0e2e80720c4_67802242',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf0e2e80720c4_67802242')) {function content_5cf0e2e80720c4_67802242($_smarty_tpl) {?><!-- html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>華東ERP客制化</title>
<!-- css -->
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	background-image: url(images/index/bg.gif);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
table {
  border:5px black solid;
}
td {
  border:3px black solid;
}
-->
</style>
<link href="/images/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <!--畫面-->
  <form action="" method="POST">
  <table style="border:13px black solid ;" >
    <tr><!--橫-->
      <td colspan='2'>ERP系統登入畫面
        <!--列-->
      </td>
    </tr>
    <tr>
      <td>工號 </td>
      <td><input type='text' name='emp' value='' /> </td>
    </tr>
    <tr>
      <td>密碼 </td>
      <td><input type='text' name='password' value='' /> </td>
    </tr>
    <tr>
      <td colspan='2'><input type='submit' name='login' value='登入' /> </td>
    </tr>
  </table>
  </form>
</body>
</html>

<!-- javascript -->
<script type="text/JavaScript">
</script>

<?php }} ?>
