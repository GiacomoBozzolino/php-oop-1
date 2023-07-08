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

?>