<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

$x = "outside"; // global

function convert() {

global $x;

$x = "inside";// local


}

echo $x;

echo "<br>";

convert();

echo $x;

echo "<br>";

echo $x;