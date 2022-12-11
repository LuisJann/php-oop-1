<?php
class Movies
{
    public $name;
    public $genre;
    public $duration;

    function __construct($name, $genre, $duration = "")
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->duration = $duration;
    }
};
