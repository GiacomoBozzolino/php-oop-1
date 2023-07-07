<?php

    class Movie {
        public $title;
        public $genre;
        public $director;
        public $starring;
        public $date;
        public $language;
        public $oscar;
        
        // funzione per attribuire il premio
        public function setOscar ($oscar) {
            if ($this->oscar === $oscar) {
                $this->oscar = 'Ha vinto un Oscar';
            }
            else {
                $this->oscar = 'Non ha vinto un Oscar';
            }
        }

        public function getOscar(){
            return $this->oscar;
        }
        
    }


    // primo film
    $alien = new Movie();
    $alien->title ="Alien";
    $alien->genre ="Science fiction";
    $alien->director ="Ridley Scott";
    $alien->starring ="Sigourney Weaver";
    $alien->date = 1979;
    $alien->language ="English";
    $alien->oscar = true;
    $alien->setOscar(true);
    var_dump($alien);
    echo $alien->getOscar();


    // secondo film
    $tremors = new Movie();
    $tremors->title ="Tremors";
    $tremors->genre ="Horror";
    $tremors->director ="Ron Underwood";
    $tremors->starring ="Kevin Bacon";
    $tremors->date = 1990;
    $tremors->language ="English";
    $tremors->oscar = false;
    $tremors->setOscar(true);
    var_dump($tremors);
    echo $tremors->getOscar();


    
    
?>