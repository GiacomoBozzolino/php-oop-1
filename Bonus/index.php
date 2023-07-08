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


    // primo film
    $alien = new Movie('Alien',['Science fiction','Horror'],'Ridley Scott',['Tom Skerritt','Sigourney Weaver','Veronica Cartwright','Harry Dean Stanton','Ian Holm','Yaphet Kotto','John Hurt'], 1979,'English', true );
    $alien->setOscar(true);

    // secondo film
    $tremors = new Movie('Tremors',["Horror","Monster", "Commedy"],'Ron Underwood',["Kevin Bacon", "Fred Ward","Finn Carter","Michael Gross","Reba McEntire"], 1990,'English', false );
    $tremors->setOscar(true);
  

// realizzo un array per i film
$movies =[
    $alien,
    $tremors,
    
];


    
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php foreach ( $movies as $movie) { ?>
                    <ul>
                        <li>
                            <?php echo $movie->title ?>
                        </li>
                        <?php foreach ($movie->genre as $genre) { ?> 
                            <li>
                                <?php echo $genre;?>
                            </li>
                        <?php } ?>
                        <li>
                            <?php echo $movie->director ?>
                        </li>
                        <?php foreach ($movie->starring as $actor) { ?> 
                            <li>
                                <?php echo $actor;?>
                            </li>
                        <?php } ?>
                        <li>
                            <?php echo $movie->date?>
                        </li>
                        <li>
                            <?php echo $movie->language?>
                        </li>
                        <li>
                            <?php echo $movie->oscar?>
                        </li>
                    </ul>
                    <?php } ?>
                </div>
            </div>


        </div>

        
    </body>
</html>