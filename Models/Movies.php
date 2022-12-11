<?php

require_once __DIR__ . "/MultiGenre.php";
class Movies
{
    public $name;
    public $genre;
    public Genre $otherGenre;
    public $duration;
    private $durationFilm;


    function __construct($name, $genre, Genre $otherGenre, $duration = "")
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->otherGenre = $otherGenre;
        $this->duration = $duration;
    }

    public function getDuration()
    {
        return $this->durationFilm;
    }

    public function setDuration($duration)
    {
        if ($duration >= 100) {
            $this->durationFilm = "long film";
        } elseif ($duration < 100) {
            $this->durationFilm = "short film";
        }
    }
};
