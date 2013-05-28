<?php /* Smarty version Smarty-3.1.13, created on 2013-05-23 19:39:45
         compiled from "/home/supermanner/www/practice/tpl/templates/response.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157161714451862b280716d3-18529944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdca5bf2f20d70ae26f22dbe2492bafd1b925106' => 
    array (
      0 => '/home/supermanner/www/practice/tpl/templates/response.tpl',
      1 => 1369305582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157161714451862b280716d3-18529944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51862b280b43d9_10889824',
  'variables' => 
  array (
    'parent_content' => 0,
    'all_response_data' => 0,
    'record' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51862b280b43d9_10889824')) {function content_51862b280b43d9_10889824($_smarty_tpl) {?><html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
<link rel="stylesheet" type="text/css" href="../css/common.css">
<script src="../js/jquery-2.0.0.min.js"></script>
<script src="../js/Ajax.js" charset="utf-8"></script>
</head>
<body>
<div class="container clearfix">
    <div class="grid first">
        <h1><a href = "../index.php" border="0">みるく速報</a></h1>
    </div>
    <div style="margin-top: 50px">
    <div class="grid first">
        <div class="parenst">
            <a href="response.php?parent_id=<?php echo $_smarty_tpl->tpl_vars['parent_content']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent_content']->value['title'];?>
</a>
            <div style='clear:both';></div>
            <div class="name">名前:<?php echo $_smarty_tpl->tpl_vars['parent_content']->value['name'];?>
</div>
            <div class="time">投稿時間:<?php echo $_smarty_tpl->tpl_vars['parent_content']->value['mtime'];?>
</div>
            <div class="contents"><?php echo $_smarty_tpl->tpl_vars['parent_content']->value['text'];?>
</div>
        </div>
    </div>
    <div style="margin-top: 30px;"></div>
   <!-- ここかられす -->
    <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_response_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
    <div class="grid first" style="margin-top: 10px;">
       <div class="name">名前:<?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
</div>
       <div class="time">投稿時間:<?php echo $_smarty_tpl->tpl_vars['record']->value['mtime'];?>
</div>
       <div class="contents"><?php echo $_smarty_tpl->tpl_vars['record']->value['body'];?>
</div>
    </div>
    <?php } ?>
    <div style="margin-top: 200px;"></div>
    <div class="grid6 first">
    <form method="POST" action="commit.php">
        <div class="grid2 first">名前：</div>
        <div class="grid4"><input type="text" name="name"></div>
        <div class="grid6 first">本文：</div>
        <div class="grid6 first">
            <textarea name="text" cols=40 rows=4></textarea>
        </div>
        <div class="gird6 first">
            <input type="hidden" name= "parent_id" value=<?php echo $_smarty_tpl->tpl_vars['parent_content']->value['id'];?>
>
            <input type="submit" value="送信">
            <input type="reset" value="取消">
        </div>
    </form>
</div>
</body>
</html>
<?php }} ?>