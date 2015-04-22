<?php
include 'settings.php';

$p = "home";

if (isset($_GET["p"])) {
    $p = str_replace("__", "/", $_GET["p"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="dist/summernote-bs2.css" rel="stylesheet" type="text/css">
    <link href="dist/summernote.css" rel="stylesheet" type="text/css">
    <link href="thermometer.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="carousel.css" rel="stylesheet" type="text/css"/>
    <link href="pages/<?php echo $p; ?>.css" rel="stylesheet" type="text/css">

    <title>Umali Autism Foundation Tanzania</title>
    
    <meta name="viewport" content="initial-scale = 1.0; max-scale = 1.0" />

    <script src="//code.jquery.com/jquery-latest.min.js" id="jquery"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Custom JS -->
    <!-- <script type="text/javascript" src="index-js.js"></script> -->
    <script type="text/javascript" src="carousel.js"></script>
    <script type="text/javascript" src="pages/<?php echo $p; ?>.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    <script src="css3-mediaqueries.js">
    </script>
    <![endif]-->
    <!--[if IE 8]>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <![endif]-->

</head>
<body>

    <div class="container-fluid">

        <?php include 'top_bar.php'; ?><!-- DONE -->

        <div class="row-fluid">
            <div class="background-pattern span12">
                <div class="background-tint">
                    <nav class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-primary btn-block visible-phone" id="menu-btn" data-toggle="collapse" data-target=".nav-collapse">
                                Menu
                            </a>
                            <div class="nav-collapse collapse">
                                <?php include 'menu.php'; ?><!-- DONE -->
                            </div>
                        </div>
                    </nav>

                    <header class="row-fluid">
                        <?php include 'carousel.php'; ?><!-- DONE -->
                    </header>

                    <section class="row-fluid main-section">
                        <section class="span9 detail-section">
                            <?php include 'pages/'.$p.'.php'; ?><!-- DONE -->
                        </section>

                        <aside class="span3">
                            <?php include 'side_bar.php'; ?><!-- DONE -->
                        </aside>
                    </section>
                </div>
            </div>
        </div>


        <footer class="row-fluid footer-section">
            <?php include("footer.php"); ?><!-- DONE -->
        </footer>

    </div>
</body>
</html>