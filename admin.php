<?php
include 'data/users_validate.php';
?>


<!DOCTYPE html>
<html>
<head>
    <?php if ($success): ?>
        <meta name="success" content="true" />
    <?php endif ?>
    <link href="bootstrap/css/bootstrap.css"            rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="index.css"                      rel="stylesheet" type="text/css">
    <link href="carousel.css"                           rel="stylesheet" type="text/css"/>

    <title>Umali Autism Foundation Tanzania</title>
    

    <meta name="viewport" content="initial-scale = 1.0" />

    <script src="//code.jquery.com/jquery-latest.min.js" id="jquery"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="admin-js.js"></script>
    <script type="text/javascript" src="carousel.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
    <![endif]-->
    </head>
<body>

    <div class="container-fluid">

        <header class="row-fluid">
            <div class="top-bar span12">
                <img src="Umali-header.png" class="logo hidden-phone pull-left"/>
                <img src="Umali-logo-vert.jpeg" class="logo visible-phone pull-left"/>

                <div class="pull-right">
                    <a href="https://www.facebook.com/pages/Umali-Autism-Foundation-Tanzania/439641366114838"><img src="elegantmediaicons/PNG/facebook.png" class="social-icon"/></a>
                    <a href="http://twitter.com/umaliautism"><img src="elegantmediaicons/PNG/twitter.png" class="social-icon"/></a>
                    <a href="https://plus.google.com/115268126464682316101/posts"><img src="elegantmediaicons/PNG/google.png" class="social-icon"/></a>
                    <p>Like, Follow, or +1?</p>
                    <input type="text" class="search-query" id="search" placeholder="Search"/>
                </div>
            </div>
        </header>


        <div class="row-fluid">
            <div class="background-pattern span12">
                <div class="background-tint">
                    <nav class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-primary visible-phone" id="menu-btn" data-toggle="collapse" data-target=".nav-collapse">
                                Menu
                            </a>
                            <div class="nav-collapse collapse">
                                <?php include 'menu.php'; ?>
                            </div>
                        </div>
                    </nav>

                    <header class="row-fluid">
                        <?php include 'carousel.php'; ?>
                    </header>

                    <section class="row-fluid main-section">
                        <section class="span9 detail-section">
                        </section>


                        <aside class="span3">
                            <a href="#support" class="btn btn-primary btn-large" id="donate">Support</a></br>
                            <a class="thumbnail africa" href="#tanzania"><img src="Tanzania-Location.png" alt="Tanzania-Location" width="1500" height="1500" /></a>
                            <a class="twitter-timeline" href="https://twitter.com/search?q=%23autism" data-widget-id="341049407648702464">Tweets about "#autism"</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                        </aside>
                    </section>
                </div>
            </div>
        </div>


        <footer class="row-fluid footer-section">
            <?php include("footer.php"); ?>
        </footer>

    </div>
</body>
</html>