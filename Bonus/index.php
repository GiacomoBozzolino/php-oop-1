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
    $alien->genre =["Science fiction","Horror"];
    $alien->director ="Ridley Scott";
    $alien->starring =["Tom Skerritt","Sigourney Weaver","Veronica Cartwright","Harry Dean Stanton","Ian Holm","Yaphet Kotto","John Hurt"];
    $alien->date = 1979;
    $alien->language ="English";
    $alien->oscar = true;
    $alien->setOscar(true);

    // QUESTI ECHO DA SOSTITUIRE CON UNA STRUTTURA IN HTML
    echo $alien->title. "<br/>";
    foreach ($alien->genre as $genre){
        echo  $genre. "<br/>";
       }
    echo $alien->director. "<br/>".$alien->date. "<br/>".$alien->language. "<br/>".$alien->getOscar(). "<br/>";

    foreach ($alien->starring as $actor){
        echo  $actor. "<br/>";
       }
       

    // secondo film
    $tremors = new Movie();
    $tremors->title ="Tremors";
    $tremors->genre =["Horror","Monster", "Commedy"];
    $tremors->director ="Ron Underwood";
    $tremors->starring =["Kevin Bacon", "Fred Ward","Finn Carter","Michael Gross","Reba McEntire",];
    $tremors->date = 1990;
    $tremors->language ="English";
    $tremors->oscar = false;
    $tremors->setOscar(true);
    
    // QUESTI ECHO DA SOSTITUIRE CON UNA STRUTTURA IN HTML
    echo "<br/>"."<br/>".$tremors->title. "<br/>";
    foreach ($tremors->genre as $genre){
        echo  $genre. "<br/>";
       }
    echo $tremors->director. "<br/>".$tremors->date. "<br/>".$tremors->language. "<br/>".$tremors->getOscar(). "<br/>";

    foreach ($tremors->starring as $actor){
        echo  $actor. "<br/>";
       }





    
    
?>