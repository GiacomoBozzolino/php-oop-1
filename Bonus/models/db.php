<?php
    // primo film
    $alien = new Movie('Alien',['Science fiction','Horror'],'Ridley Scott',['Tom Skerritt','Sigourney Weaver','Veronica Cartwright','Ian Holm','John Hurt'], 1979,'English', true );
    $alien->setOscar(true);
    $alien->poster= "./img/Alien_movie_poster.jpg";

    // secondo film
    $tremors = new Movie('Tremors',["Horror","Monster", "Commedy"],'Ron Underwood',["Kevin Bacon", "Fred Ward","Finn Carter","Michael Gross","Reba McEntire"], 1990,'English', false );
    $tremors->setOscar(true);
    $tremors->poster= "./img/Tremors_official_theatrical_poster.jpg";


    // realizzo un array per i film
    $movies =[
    $alien,
    $tremors,

    ];


?>