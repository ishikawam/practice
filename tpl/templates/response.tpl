<html>
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
<input type="hidden" value={$parent_id}>
<input type="submit" value="送信">
<input type="reset" value="取消">
</form>
</body>
</html>
