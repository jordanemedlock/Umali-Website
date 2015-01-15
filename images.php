<?php
$files = glob('umalilibrary/*.{jpg,png,gif}', GLOB_BRACE);
echo json_encode($files);
?>