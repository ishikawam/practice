$(function() {
    setModal();
})

function setModal()
{
    adjustCenter("div#modal div.container");

    $(window).resize(function() {
        adjustCenter("div#model div.container");
    });

    $("div#modal div.background").click(function() {
        displayModal(false);
    });

    $("a.modal").click(function() {
        $("div#modal div.container").load($(this).attr("href"), onComplete);
        return false;
    });

    function onComplete() {
        displayModal(true);
        $("div#modal div.container a.close").click(function() {
            displayModal(false);
            return false;
        });
    }
}
//モーダルウィンドウを開く
function displayModal(sign) {
    if (sign) {
        $("div#modal").fadeIn(500);
    } else {
        $("div#modal").fadeOut(250);
    }
}

//ウィンドウの位置をセンターに調整
function adjustCenter(target) {
    var margin_top = ($(window).height()-$(target).height())/2;
    var margin_left = ($(window).width()-$(target).width())/2;
    $(target).css({top:margin_top+"px", left:margin_left+"px"});
}
