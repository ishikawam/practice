<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 09:24:31
         compiled from "/home/supermanner/www/practice/tpl/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118277911351820a31479ec0-01631879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d71f35f76b292e6b49001d6746affb8e250543' => 
    array (
      0 => '/home/supermanner/www/practice/tpl/templates/index.tpl',
      1 => 1367886263,
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
    <h1>あいうえおあいうえおあいうえおあいうえお</h1>
<div style="padding:5px;background:#cccccc;border-color:#333333;border-width:0 0 3px 0;border-style:solid;">
        <ul>ここにかいてねー</ul>
        <form method="POST" action="commit.php">
            <div>名前：<input type="text" name="name"></div>
            <div>本文：
            <textarea name="text" cols=40 rows=4>
            あいうえお
            </textarea>
            </div>
            <input type="submit" value="送信">
            <input type="reset" value="取消">
        </form>
   </div>
   <div>
    <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
        <ul>名前:<?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
</ul>
        <ul>投稿時間:<?php echo $_smarty_tpl->tpl_vars['record']->value['mtime'];?>
</ul>
        <ul>内容</ul>
        <ul><?php echo $_smarty_tpl->tpl_vars['record']->value['text'];?>
</ul>

<div id="modal">
<div class="background"></div>
<div class="container"></div>
</div><!-- modal -->
        <div id="res">
            <button id="res_button"><a href="response.php" class="modal">返信</a></button>
       </div>
   <?php } ?>
   </div>
   <div id="test"></div>
   <div id="additional"></div>
   <form method="POST" id='more_form' action=''>
        <input type="hidden" id="offset" value=4>
        <input type="hidden" id="limit" value=5>
        <input type="submit" id = "more" value="もっとみる">
   </form>
</body>
</html>
<?php }} ?>