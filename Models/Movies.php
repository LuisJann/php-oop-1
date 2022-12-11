<?php
class Movies
{
    public $name;
    public $genre;
    public $duration;
    private $durationFilm;

    function __construct($name, $genre = null, $duration = "")
    {
        $this->name = $name;
        $this->genre = $genre;
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
        }
    }
};
