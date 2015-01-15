<?php
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
        $s = '<li class="'.$page["loc"].'"';
        $s .= '><a href="#'.$page["loc"].'" data-toggle="collapse" data-target=".nav-collapse">';
        $s .= $page["name"].'</a></li>'."\n";
        echo $s;
    } ?>
</ul>