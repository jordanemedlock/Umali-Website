<?php 
include_once 'settings.php'; 


function socIcon($name, $loc){
    return "<a href='$loc'>".img("$name.png", cls("social-icon"))."</a>";
}

$facebookLink = socIcon("facebook", "https://www.facebook.com/pages/Umali-Autism-Foundation-Tanzania/439641366114838");
$twitterLink = socIcon("twitter","http://twitter.com/umaliautism");
$googlePlusLink = socIcon("google", "https://plus.google.com/115268126464682316101/posts");

$searchBar = textBar(id("search",array("placeholder"=>"Search")));
$searchButton = linkTo(icon("search"), "search-results", cls("add-on"));

$searchArea = row(spanDiv(12, $searchBar.$searchButton, cls("input-append")));

$headerDesktop = img("Umali-header.png",    cls("logo hidden-phone  pull-left"));
$headerPhone   = img("Umali-logo-vert.jpeg", cls("logo visible-phone pull-left"));
$headerLogo    = $headerDesktop.$headerPhone;

?>

<header class="row-fluid">
    <div class="top-bar span12">

        <?php echo $headerLogo; ?>
        
        <div class="pull-right">
            <?php 
                echo $facebookLink;
                echo $twitterLink;
                echo $googlePlusLink;
            ?>
            <p>Like, Follow, or +1?</p>
            <?php echo $searchArea; ?>
        </div>
    </div>
</header>