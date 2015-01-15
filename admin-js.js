less = { env: "development" };

function goto(loc) {
    var arr = loc.split("__");
    console.log("pages/"+arr[0]+".php" + (arr[1] ? "?loc=" + arr[1] : ""));
    $.get("pages/"+arr[0]+".php" + (arr[1] ? "?loc=" + arr[1] : ""), function(data, status, blah){
        $(".detail-section").animate({opacity: 0}, 200, function() {
            $(".detail-section").html(data).animate({opacity: 1}, 200);
        });
        console.log(status);
        $('link.added').remove();
        $('head').append('<link rel="stylesheet"  class="added" type="text/css" href="pages/'+arr[0]+'.css">');
        $.getScript("pages/"+arr[0]+".js");
        $("li").removeClass("active");
        $("li."+arr[0]).addClass("active");
    }, "html");
    
}
$(function(){
    
    if ($("meta[name='success']").attr("content") == "true"){
        goto("logged_in__pass");
    } else {
        goto("login__fail");
    }
    goto(location.hash.substr(1));
    $(window).on('hashchange', function() {
        goto(location.hash.substr(1));
    });
});