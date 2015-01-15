$(function () {
  $.getScript("bootstrap-wysiwyg.js", function () {
    console.log('test');
    $("#editor").wysiwyg();
  }).fail(function(jqxhr, settings, exception) {
    console.log( exception);
  });
});