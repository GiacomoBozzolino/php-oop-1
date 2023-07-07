<?php

    class Movie {
        public $title;
        public $genre;
        public $director;
        public $starring;
        public $date;
        public $language;

    }



    $alien = new Movie();
    $alien->title ="Alien";
    $alien->genre ="Science fiction";
    $alien->director ="Ridley Scott";
    $alien->starring ="Sigourney Weaver";
    $alien->date ="1979";
    $alien->language ="English";

    echo $alien->title;
    
?>