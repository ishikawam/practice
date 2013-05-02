<html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="css/common.css">
</head>
<body>
    <h1>パワハラに負けない</h1>
        <ul>ここにかいてねー</ul>
        <form method="POST" action="commit.php">
            <div>名前：<input type="text" name="name"></div>
            <div>ほんぶんだよー：<input type="text" name="text"></div>
            <input type="submit" value="送信">
            <input type="reset" value="取消">
        </form>
   <div>
    {foreach from=$data item=record}
        <ul>名前:{$record.name}</ul>
        <ul>投稿時間:{$record.mtime}</ul>
        <ul>内容</ul>
        <ul>{$record.text}</ul>
   {/foreach}
   </div>
</body>
</html>
