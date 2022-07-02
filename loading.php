<?php

$blockToLoad = 10;
$string = "";
$finishMessage = "Loading finished!\n";
for($f = 0; $f <= $blockToLoad; $f++) {
    system("clear");
    $string .= "⬛";
    $percent = ceil($f / $blockToLoad * 100);
    $string .= $percent."%";
    echo($string);
    $string = preg_replace("/[0-9%]/", "", $string);
    sleep(1); // 1 second
}
echo("\n");
echo($finishMessage);

//Code comes here!