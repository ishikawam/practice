$(document).ready(function()
   {
       var cnt = 0;
       
       $("#more").click(function()
           {
               cnt++;            
               var data = { offset : 5 * cnt, limit:$("#limit").val()};
                                              
               $.ajax({
                   type: "POST",
                   url:"Record.php",
                   dataType:"json",
                   data: data,
                   scriptCharset: "UTF-8",
                   success: function(data)
                   {
                   jQuery . each( data, function( key, value ) {
                       jQuery( "#additional")
                       .append(
                           $("<div style='clear:both';></div>").append(
                           $("<a></a>").attr("href","response/response.php?parent_id=" + value.id).text(value.title))
                           )
                       .append('<div class="name">名前:' + value.name + '</div>')
                       .append('<div class="time">投稿時間:' + value.mtime + '</div>')
                       .append('<div class="contents">' + value.text + '</div>');
                   });
                   jQuery('#test') . text('sucsess');
               },
                   error : function(XMLHttpRequest, textStatus, errorThrown)
               {
                   alert("Error:" + errorThrown);
               }
               });
               
               return false;
           }
        );
    }
);

