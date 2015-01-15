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
function sizeInputs() {
  $(document).find(".input_app").each(function(){  
    var container_width = $(this).parent().innerWidth();
    var btn_width = $(this).parent().find(".btn_app").width();
    // I don't know why but I need to add 25 here...???
    $(this).css('width', container_width-(btn_width + 25));  
}); 
}
$(function(){
    sizeInputs();
    goto("home");
    goto(location.hash.substr(1));
    $(window).on('hashchange', function() {
        goto(location.hash.substr(1));
    });
});
$(window).resize(function(){
    sizeInputs();  
});