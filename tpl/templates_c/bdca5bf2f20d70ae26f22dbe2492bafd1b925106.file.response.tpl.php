<?php /* Smarty version Smarty-3.1.13, created on 2013-05-05 18:49:28
         compiled from "/home/supermanner/www/practice/tpl/templates/response.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157161714451862b280716d3-18529944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdca5bf2f20d70ae26f22dbe2492bafd1b925106' => 
    array (
      0 => '/home/supermanner/www/practice/tpl/templates/response.tpl',
      1 => 1367746540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157161714451862b280716d3-18529944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51862b280b43d9_10889824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51862b280b43d9_10889824')) {function content_51862b280b43d9_10889824($_smarty_tpl) {?><html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="js/jquery-2.0.0.min.js"></script>
<script src="js/Ajax.js" charset="utf-8"></script>
</head>
<body>
<form method="POST" action="commit.php">
    <div>名前：<input type="text" name="name"></div>
    <div>本文：
    <textarea name="text" cols=40 rows=4>
    ここに返信をどうぞ
    </textarea>
</div>
<input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
>
<input type="submit" value="送信">
<input type="reset" value="取消">
</form>
</body>
</html>
<?php }} ?>