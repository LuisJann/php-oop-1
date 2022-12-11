<?php
require_once __DIR__ . "/Models/Movies.php";

$shutterIsland = new Movies("shutter island", "thriller", 120);
var_dump($shutterIsland);

$intoTheWild = new Movies("into the wild", "adventure");
var_dump($intoTheWild);
