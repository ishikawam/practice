$(document).ready(function()
   {
       $("#more").click(function()
           {
               var data = { offset : $("#offset").val(), limit:$("#limit").val() };

               $.ajax({
                   type: "POST",
                   url:"Record.php",
                   dataType:"json",
                   data: data,
                   scriptCharset: "UTF-8",
                   success: function(data)
                   {
                   jQuery . each( data, function( key, value ) {
                       jQuery( "#additional").append( 
                           '<ul>name:'  + value.name + '</ul>')
                           .append('<ul>time: ' + value.mtime + '</ul>')
                       .append('<ul>content: ' + value.text + '</ul>'
                           );
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

