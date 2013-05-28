<?php /* Smarty version Smarty-3.1.13, created on 2013-05-27 21:34:09
         compiled from "/home/supermanner/www/practice/tpl/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118277911351820a31479ec0-01631879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d71f35f76b292e6b49001d6746affb8e250543' => 
    array (
      0 => '/home/supermanner/www/practice/tpl/templates/index.tpl',
      1 => 1369657351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118277911351820a31479ec0-01631879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51820a314d8dd2_57338094',
  'variables' => 
  array (
    'pcode' => 0,
    'data' => 0,
    'record' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51820a314d8dd2_57338094')) {function content_51820a314d8dd2_57338094($_smarty_tpl) {?><html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="js/jquery-2.0.0.min.js"></script>
<script src="js/Ajax.js" charset="utf-8"></script>
<script src="js/response.js" charset="utf-8"></script>
</head>
<body>
<div class="container clearfix">
    <div class="grid first">
        <h1><a href = "index.php" border="0">みるく速報</a></h1>
    </div>
    <div class="grid first">
        <ul>ここにかいてねー</ul>
    </div> 
    <div class="grid6 first">
        <form method="POST" action="commit.php">
            <div class="grid2 first">名前</div>
            <div class="grid4"><input type="text" name="name" size="120" maxlength="30"></div>
            <div class="grid2 first">スレタイ</div>
            <div class="grid4"><input type="text" name="title" size="120" maxlength="30"></div>
            <div class="grid6 first">本文：</div>
            <div class="grid6 first">
            <textarea name="text" cols=120 rows=4></textarea>
            </div>
            <div class="grid6 first">
            <input type="hidden" name = "pcode" value = <?php echo $_smarty_tpl->tpl_vars['pcode']->value;?>
>
            <input type="submit" value="送信">
            <input type="reset" value="取消">
            </div>
        </form>
    </div>

    <!-- 記事ここから-->    
    <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
        <div style="clear:both";>
        <a href="response/response.php?parent_id=<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['record']->value['title'];?>
</a></div>
        <div class="name">名前:<?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
</div>
        <div class="time">投稿時間:<?php echo $_smarty_tpl->tpl_vars['record']->value['mtime'];?>
</div>
        <div class="contents"><?php echo $_smarty_tpl->tpl_vars['record']->value['text'];?>
</div>
    <?php } ?>
    <div id="additional"></div>
        <form method="POST" id='more_form' action=''>
            <input type="hidden" value = <?php echo $_smarty_tpl->tpl_vars['pcode']->value;?>
>
            <input type="hidden" id="offset" value= 5>
            <input type="hidden" id="limit" value= 5>
            <input type="submit" id = "more" value="もっとみる">
        </form>
    </div>
</div>
</body>
</html>
<?php }} ?>