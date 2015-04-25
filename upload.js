$(function(){
    $('.summernote').summernote({
        height: 150,   //set editable area's height
        codemirror: { // codemirror options
            theme: 'monokai'
        }
        // toolbar: [
        //     ['style', ['style']], // no style button
        //     ['style', ['bold', 'italic', 'underline', 'clear']],
        //     ['font', ['strike']],
        //     ['fontsize', ['fontsize']],
        //     ['color', ['color']],
        //     ['para', ['ul', 'ol', 'paragraph']],
        //     ['height', ['height']]
        //     ['insert', ['picture', 'link']], // no insert buttons
        //     ['table', ['table']], // no table button
        //     ['help', ['help']] //no help button
        // ]

    });
});

var submit = function(){
    console.log("clicked");
    $.post("upload_page.php?page_name="+$("#page_name").val(),
        {
            js:$("#js").val(),
            php:$("#php").code(),
            css:$("#css").val()
        },
        function(data, status, jqxhr){
            console.log(status);
            console.log(data);
        },
        "text");
};