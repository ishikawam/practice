<html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="jquery-2.0.0.min.js"></script>
<script>
$(document).ready(function()
{
    $('#more').click(function()
    {
        var data = { offset : $('#offset').val(), limit:$('#limit').val() };

        $.ajax({
            type: "POST",
            url:"Record.php",
            data: data,
            success: function(data, dataType)
            {
             jQuery . each( data, function( key, value ) {
                jQuery( '#additional' ) . append( 
                '<ul>名前: ' + value.name + '</ul>'
                '<ul>投稿時間: ' + value.mtime + '</ul>'
                '<ul>内容: ' + value.text + '</ul>'
                );
             });
            },
            error : function(XMLHttpRequest, textStatus, errorThrown)
            {
                alert('Error:' + errorThrown);
            }
        });
    });
});
</script>
</head>
<body>
    <h1>パワハラに負けない</h1>
        <ul>ここにかいてねー</ul>
        <form method="POST" action="commit.php">
            <div>名前：<input type="text" name="name"></div>
            <div>本文：
            <textarea name=text" cols=40 rows=4>
            あいうえお
            </textarea>
            </div>
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
   <div id='additional'></div>
   <form method="POST">
        <input type='hidden' id='offset' value=5>
        <input type='hidden' id='limit' value=5>
        <input type="submit" id = 'more' value="もっとみる">
   </form>
   </div>
</body>
</html>
