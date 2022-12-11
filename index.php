<?php
require_once __DIR__ . "/Models/Movies.php";
require_once __DIR__ . "/Models/MultiGenre.php";

// $shutterIsland = new Movies("shutter island", "thriller", 120);
// var_dump($shutterIsland);

// $intoTheWild = new Movies("into the wild", "adventure");
// var_dump($intoTheWild);
$otherGenre = new Genre("comics");
var_dump($otherGenre);

$intoTheWild = new Movies("Into The Wild", "adventure", new Genre("biographical"));
$intoTheWild->name = "Into The Wild";
$intoTheWild->genre = "Adventure";
$intoTheWild->duration = 90;
$intoTheWild->setDuration(90);
var_dump($intoTheWild);


$shutterIsland = new Movies("Shutter Island", "thriller", new Genre("noir"));
$shutterIsland->name = "Shutter Island";
$shutterIsland->genre = "thriller";
$shutterIsland->duration = 100;
$shutterIsland->setDuration(100);

var_dump($shutterIsland);
