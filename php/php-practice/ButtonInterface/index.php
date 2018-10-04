<?php

include 'Button.php';

print '<h1>PHP Is working!</h1>';

$button = new Button();

$button->setAdd(true)
	   ->setDelete(true)
	   ->setCreatedButton('+, -, %, x');

$add = $button->getAdd();
$delete = $button->getDelete();
$createdbutton = $button->getCreatedButton();

if ($createdbutton) {

	print "$add was created $createdbutton";
}
