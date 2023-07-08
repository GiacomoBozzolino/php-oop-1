<?php
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