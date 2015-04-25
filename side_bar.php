<?php 
include_once 'settings.php'; 
$upcomingHeading = linkTo("Upcoming Events!", "buy_ticket");

$jeezlaweezImage = linkTo(img("JeeZ_CD_cover__.jpeg"), "buy_ticket");

$buyTicketBtn = linkTo("Buy Ticket", "buy_ticket", cls("btn-primary"), true);

$supportBtn = linkTo("Support", "support", cls("btn-primary btn-block btn-large", id("donate"), true));

$tanzaniaImage = linkTo(img("Tanzania-Location.png", array("alt"=>"Tanzania-Location", "width"=>"1500", "height"=>"1500")), "tanzania", cls("thumbnail africa"));
?>

<h3>To everyone who came to our fundraiser,</br>Thank you for your support!</h3>
<?php //include 'thermometer.php'; ?>
<?php echo $supportBtn; ?>

<?php echo $tanzaniaImage; ?>
<a class="twitter-timeline" href="https://twitter.com/search?q=%23autism" data-widget-id="341049407648702464">Tweets about "#autism"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
