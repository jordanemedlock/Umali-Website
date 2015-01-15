<?php
include 'count_hits.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="carousel.css" rel="stylesheet" type="text/css"/>

    <title>Umali Autism Foundation Tanzania</title>
    

    <meta name="viewport" content="initial-scale = 1.0; max-scale = 1.0" />

    <script src="//code.jquery.com/jquery-latest.min.js" id="jquery"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Custom JS -->
    <script type="text/javascript" src="index-js.js"></script>
    <script type="text/javascript" src="carousel.js"></script>
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

        <header class="row-fluid">
            <div class="top-bar span12">
                <img src="Umali-header.png" class="logo hidden-phone pull-left"/>
                <img src="Umali-logo-vert.jpeg" class="logo visible-phone pull-left"/>

                <div class="pull-right">
                    <a href="https://www.facebook.com/pages/Umali-Autism-Foundation-Tanzania/439641366114838"><img src="elegantmediaicons/PNG/facebook.png" class="social-icon"/></a>
                    <a href="http://twitter.com/umaliautism"><img src="elegantmediaicons/PNG/twitter.png" class="social-icon"/></a>
                    <a href="https://plus.google.com/115268126464682316101/posts"><img src="elegantmediaicons/PNG/google.png" class="social-icon"/></a>
                    <p>Like, Follow, or +1?</p>
                    <div class="row-fluid">
                        <div class="input-append span12">
                            <input type="text" placeholder="Search" id="search"/>
                            <a href="#search-results" class="add-on"><i class="icon-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="row-fluid">
            <div class="background-pattern span12">
                <div class="background-tint">
                    <nav class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-primary btn-block visible-phone" id="menu-btn" data-toggle="collapse" data-target=".nav-collapse">
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
                            
                            <!-- First Row -->
                            <div class="hero-section hero-unit">
                                <!--<img src="Dodoma-Sep-27.jpg" class="pull-right" width="400"/>-->

                                <p><strong>Children with Autism Spectrum Disorder in Tanzania are largely undiagnosed.</strong> Many of their gifts remain hidden while the challenges can be severe. Our Mission at Umali Autism Foundation Tanzania is to bring these children and their families Special Education and Health Care Services which have been unavailable.</p>
                            </div>

                            <!-- Second Row -->
                            <div class="row-fluid second-row-section no-space">

                                <article class="span8">
                                    <img src="data/uploads/TZ_group_2013.png" class="home-image"/>
                                    <p class="caption">
                                        2013 trip to Tanzania (from left to right):  Grace Lyimo, Mathias Bali, Kerri Elliot, Brenda Shuma, Jillian Swinford, & Anthony Shuma
                                    </p>
                                </article>
                                <article class="span4 goals">
                                    <p><strong>Umali Autism Foundation Tanzania (UAFT)</strong> is a group of American and Tanzanian professionals who are working together towards these goals in four ways:</p>
                                    <ol>
                                        <li><strong>To develop a network</strong> in Tanzania of future educators and care providers for children with ASD.</li>
                                        <li>To provide them with <strong>training.</strong></li>
                                        <li>To <strong>raise funds</strong> to support and house that network.</li>
                                        <li>To create <strong>liaison</strong> between Tanzanian and New Mexican Universities.</li>
                                    </ol>
                                </article>
                            </div>



                            <div class="row-fluid second-row-section">
                                <section class="span12 latest-blog">
                                    <h2><a href="#blog">Planning Our 2014 Tanzania Trainings</a></h2>
                                    <p>We are so excited to be planning for our upcoming trip to Tanzania.  This year, we are raising funds for the trainings and workshops that UAFT will be providing about Autism Spectrum Disorders in Tanzania.  A very experienced team of professionals: a physician, two educators, and a speech-language pathologist are collaborating with professionals in Tanzania to develop resources for children with autism.</p>
                                    <a href="#blog" class="btn btn-primary">Read More</a>
                                </section>
                            </div>
                        </section>


                        <aside class="span3">
                            <a href="#support" class="btn btn-primary btn-block btn-large" id="donate">Support</a></br>
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