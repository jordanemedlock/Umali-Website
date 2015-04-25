<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$pagesDir = "pages";

$pageName = "";

$from = $_REQUEST;

if (isset($from["page_name"])) {
    $pageName = $from["page_name"];
} else {
    die("Failure");
}

$docuemts = array("js", "css", "php");

foreach ($docuemts as $format) {
    if (isset($from[$format]) && $from[$format] !== ""){
        echo $from[$format];

        $fh = fopen($pagesDir."/".$pageName.".".$format, "w") or die("fopen died");
        $chmodded = chmod($pagesDir."/".$pageName.".".$format, 0644) or die("chmod died");
        $written = fwrite($fh, $from[$format]) or die("fwrite died");
    }
}

echo "success";
?>

