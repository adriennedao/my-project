<?php

include 'DemoEntity.php';

print '<h1>PHP Is working!</h1>';

$demo = new DemoEntity();

$demo->setPublished(true)
     ->setCreatedTime(time())
     ->setName('OOP Entity title');

$name = $demo->getName();
$time = $demo->getCreatedTime();
$published = $demo->isPublished();

if ($published) {
    print "$name was published at $time";
}