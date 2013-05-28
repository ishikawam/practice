<html>
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
            <a href="response.php?parent_id={$parent_content.id}">{$parent_content.title}</a>
            <div style='clear:both';></div>
            <div class="name">名前:{$parent_content.name}</div>
            <div class="time">投稿時間:{$parent_content.mtime}</div>
            <div class="contents">{$parent_content.text}</div>
        </div>
    </div>
    <div style="margin-top: 30px;"></div>
   <!-- ここかられす -->
    {foreach from=$all_response_data item=record name=rows}
    <div class="grid first" style="margin-top: 10px;">
       <div class="name">名前:{$record.name}</div>
       <div class="time">投稿時間:{$record.mtime}</div>
       <div class="contents">{$record.body}</div>
    </div>
    {/foreach}
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
            <input type="hidden" name= "parent_id" value={$parent_content.id}>
            <input type="submit" value="送信">
            <input type="reset" value="取消">
        </div>
    </form>
</div>
</body>
</html>
