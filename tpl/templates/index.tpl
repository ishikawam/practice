<html>
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
    {foreach from=$data item=record}
        <ul>名前:{$record.name}</ul>
        <ul>投稿時間:{$record.mtime}</ul>
        <ul>内容</ul>
        <ul>{$record.text}</ul>

<div id="modal">
<div class="background"></div>
<div class="container"></div>
</div><!-- modal -->
        <div id="res">
            <button id="res_button"><a href="response.php" class="modal">返信</a></button>
       </div>
   {/foreach}
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
