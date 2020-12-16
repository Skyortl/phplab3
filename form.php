<?php
include_once('index.html');
const RAND_MIN = 0;
const RAND_MAX = 255;
$background['red'] = $_GET['red'];
$background['green'] = $_GET['green'];
$background['blue'] = $_GET['blue'];
$text['red'] = rand(RAND_MIN, RAND_MAX);
$text['green'] = rand(RAND_MIN, RAND_MAX);
$text['blue'] = rand(RAND_MIN, RAND_MAX);
echo "<style type=\"text/css\">
.calculated-background {
    background-color: rgb(".$background['red'].",".$background['green'].",". $background['blue'].");
}
.random-text {
    color: rgb(".$text['red'].",".$text['green'].",". $text['blue'].");
}
</style>"
?>