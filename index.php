<?php

class Movie {

    public $title;
    public $year;
    public $genre;



    function __construct($_title, $_year, $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;

    }


   public function printMovie() {
   
    echo $this->title;
    echo '<br>';
    echo $this->year;
    echo '<br>';
    echo $this->genre;
   }
}


$movieOne = new Movie ('The Godfather', 1972, 'Drama');
var_dump($movieOne);
$movieOne->printMovie();



$movieTwo = new Movie ('Drive My Car',2021, 'Drama');
var_dump($movieTwo);
$movieTwo->printMovie();


?>


