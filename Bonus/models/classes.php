<?php
    class Movie {
        public $title;
        public $genre;
        public $director;
        public $starring;
        public $date;
        public $language;
        public $oscar;
        public $poster;

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

?>