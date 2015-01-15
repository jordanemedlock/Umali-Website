$(function(){
    var images = [];
    $.getJSON("images.php", function(data, textStatus, jqXHR) {
      images = data;
      for (var i=0; i < images.length; i++){
        var r = Math.floor(Math.random()*images.length);
        var temp = images[i];
        images[i] = images[r];
        images[r] = temp;
      }
      for (var j=0; j < 15; j++){
        $("ul.photo-carousel").append('<li><a href="'+images[j]+'"><img src="'+images[j]+'"/></a></li>'+"\n");
      }
      var i=15;
      var tid = setInterval(mycode, 10000);
      function mycode() {
        $("div.photo-carousel").animate({opacity: 0}, 600, function  () {
          $("ul.photo-carousel").html("");
          for (var j=0; j < 15; j++){
            if (i + j >= images.length) i = 0;
            
            $("ul.photo-carousel").append('<li><a href="'+images[i+j]+'"><img src="'+images[i+j]+'"/></a></li>'+"\n");
          }
          i=(i+15)%images.length;
          $("div.photo-carousel").animate({opacity: 1}, 600);
        });
        
      }
    });
    
  });