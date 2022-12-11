<?php
require_once __DIR__ . "/Models/Movies.php";

// $shutterIsland = new Movies("shutter island", "thriller", 120);
// var_dump($shutterIsland);

$intoTheWild = new Movies("into the wild", "adventure");
var_dump($intoTheWild);

$shutterIsland = new Movies("Shutter Island");
$shutterIsland->name = "Shutter Island";
$shutterIsland->genre = "thriller";
$shutterIsland->duration = 100;
$shutterIsland->setDuration(100);

var_dump($shutterIsland);
var_dump($shutterIsland->getDuration());
