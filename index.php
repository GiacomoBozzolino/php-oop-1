<?php

class Movie {
    public $title;
    public $genre;
    public $director;
    public $starring;
    public $date;
    public $language;
    public $oscar;
   

    function __construct($title, $genre, $director, $starring, $date, $language, $oscar){
        $this-> title= $title;
        $this-> genre= $genre;
        $this-> director= $director;
        $this-> starring= $starring;
        $this-> date= $date;
        $this-> language= $language;
        $this-> oscar= $oscar;
    }    
        
    // funzione per attribuire il premio
    public function setOscar ($oscar) {
        if ($this->oscar === $oscar) {
            $this->oscar = 'Academy Award-winning';
        }
        else {
            $this->oscar = 'No Award-winning';
        }
    }

    public function getOscar(){
        return $this->oscar;
    }

}


    // primo film
    // primo film
    $alien = new Movie('Alien','Science fiction','Ridley Scott',['Tom Skerritt','Sigourney Weaver','Veronica Cartwright','Ian Holm','John Hurt'], 1979,'English', true );
    $alien->setOscar(true);
    

    echo $alien->title. "<br/>". $alien->genre. "<br/>". $alien->director. "<br/>".$alien->date. "<br/>".$alien->language. "<br/>".$alien->getOscar(). "<br/>";

    foreach ($alien->starring as $actor){
        echo  $actor. "<br/>";
       }


    // secondo film
    $tremors = new Movie('Tremors','Horror','Ron Underwood',["Kevin Bacon", "Fred Ward","Finn Carter","Michael Gross","Reba McEntire"], 1990,'English', false );
    $tremors->setOscar(true);
    
    
   
    echo "<br/>". "<br/>". "<br/>". $tremors->title. "<br/>". $tremors->genre. "<br/>". $tremors->director. "<br/>" .$tremors->date. "<br/>".$tremors->language. "<br/>".$tremors->getOscar(). "<br/>";
    
   foreach ($tremors->starring as $actor){
    echo  $actor. "<br/>";
   }




    
    
?>