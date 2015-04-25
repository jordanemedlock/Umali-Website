<!DOCTYPE html>
<html>
<head>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css"> 
    <link href="dist/summernote.css" rel="stylesheet" type="text/css">
    <link href="dist/summernote-bs3.css" rel="stylesheet" type="text/css">

    <link href="upload.css" rel="stylesheet" type="text/css">
    <link href="fa/css/font-awesome.min.css">

    <script src="//code.jquery.com/jquery-1.9.1.min.js" id="jquery"></script>
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script> 

    <script src="dist/summernote.min.js"></script>
    <script type="text/javascript" src="upload.js"></script>
    <link href="index.css" rel="stylesheet" type="text/css">
    <title>Upload</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6">
                <h1>Upload a Page</h1>

                <input 
                    name="page_name" 
                    id="page_name" 
                    type="text" 
                    placeholder="Page Name">
                </br>

                <div 
                    id="php" 
                    class="file span12 summernote" 
                    placeholder="HTML Code"></div>
                <br/>

                <textarea 
                    id="css" 
                    class="file span12"
                    placeholder="CSS Code"></textarea>
                <br/>

                <textarea 
                    id="js" 
                    class="file span12"
                    placeholder="JavaScript Code"></textarea>
                <br/>

                <button 
                    class="btn btn-primary" 
                    onclick="submit()">Submit</button>
            </div>
        </div>
    </div>
</body>
</html>

