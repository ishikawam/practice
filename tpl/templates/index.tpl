<html>
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
            <input type="hidden" name = "pcode" value = {$pcode}>
            <input type="submit" value="送信">
            <input type="reset" value="取消">
            </div>
        </form>
    </div>

    <!-- 記事ここから-->    
    {foreach from=$data item=record name=rows}
        <div style="clear:both";>
        <a href="response/response.php?parent_id={$record.id}">{$record.title}</a></div>
        <div class="name">名前:{$record.name}</div>
        <div class="time">投稿時間:{$record.mtime}</div>
        <div class="contents">{$record.text}</div>
    {/foreach}
    <div id="additional"></div>
        <form method="POST" id='more_form' action=''>
            <input type="hidden" value = {$pcode}>
            <input type="hidden" id="offset" value= 5>
            <input type="hidden" id="limit" value= 5>
            <input type="submit" id = "more" value="もっとみる">
        </form>
    </div>
</div>
</body>
</html>
