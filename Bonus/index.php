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