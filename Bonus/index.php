<?php
    include __DIR__ .'/models/classes.php';
    include __DIR__ .'/models/db.php';
   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-end">
                        <h1 class="p-3"> OPP MOVIES</h1>
                    </div>
                </div>
            </div>
        </header>
       <main>
           <div class="container">
               <div class="row">
                    <?php foreach ( $movies as $movie) { ?>
                        <div class="col-6   ">
                            <div class= "card m-5">
                                    <div class= "text-center">
                                        <img   src=" <?php echo $movie->poster ?>" alt="">
                                    </div>
                                <ul>
                                    <li>
                                        <h2  class= "text-center">
                                            <?php echo $movie->title ?>
                                        </h2>
                                    </li> 
                                    <li class="d-flex flex-wrap align-items-center">
                                        <h5 class="pe-2">
                                            Genres:
                                        </h5>
                                        <?php foreach ($movie->genre as $genre) { ?> 
                                            <div class="px-2 " >
                                                <?php echo $genre;?>, 
                                            </div>
                                        <?php } ?>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <h5 class="pe-2">
                                            Director:
                                        </h5>
                                        <div>
                                            <?php echo $movie->director ?>
                                        </div> 
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">

                                        <h5 class="pe-2">
                                            Starring:
                                        </h5>
                                        <div>
                                            <?php foreach ($movie->starring as $actor) { ?> 
                                                <div class="px-2">
                                                    <?php echo $actor;?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <h5 class="pe-2">
                                            Release dates:
                                        </h5>
                                        <div>
                                            <?php echo $movie->date?>
                                        </div> 
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <h5 class="pe-2">
                                            Language:
                                        </h5>
                                        <div>
                                            <?php echo $movie->language?>
                                        </div> 
                                        
                                    </li>
                                    <li>
                                        <h5 class="pe-2 text-center">
                                            <?php echo $movie->oscar?>
                                        </h5>
                                    </li>
                                </ul>
                            </div>      
                        </div>
                    <?php } ?>
                </div>
           </div> 
       </main>
    </body>
</html>