<?php

include_once 'settings.php';
$pages = array();
if ($fh = fopen("pages.json", "r")){
    $pages = json_decode(fread($fh, filesize("pages.json")), true);
    fclose($fh);
}
?>

<ul class="nav nav-pills nav-stacked">
    <?php
    if (isset($_POST["edit"]) && $_POST["edit"] == true){
        echo '<li class="logged_in"><a href="#logged_in">Account</a></li>';
    }
    ?>
    <?php 
    for ($i=0;$i<count($pages); $i++) {
        $page = $pages[$i];
        $s = tag("li", 
                 cls($page["loc"]), 
                 linkTo($page["name"], 
                        $page["loc"], 
                        array("data-toggle"=>"collapse", 
                              "data-target"=>".nav-collapse")));
        echo $s;
    } ?>
</ul>