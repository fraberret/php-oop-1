<?php

require 'Database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    </head>
    <body>

        <header>
            <h1 class="text-center">Productions</h1>
        </header>    

        <main>
            <div class="container">
            <h1>Productions</h1>
                <div class="row pb-4">
                    <?php foreach($productions as $production):?>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                            
                                    <h3 class="card-title"><?php echo $production->getTitle();?></h3>
                                    <p>Language: <?php echo $production->getLanguage();?>
                                    <p>Vote: <?php echo $production->getVote();?>
                                   
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            
            
                <h1>Movies</h1>
                <div class="row pb-4">
                    <?php foreach($movies as $movie):?>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                            
                                    <h3 class="card-title"><?php echo $movie->getTitle();?></h3>
                                    <p>Language: <?php echo $movie->getLanguage();?>
                                    <p>Vote: <?php echo $movie->getVote();?>
                                    <p>Profitti: <?php echo $movie->getProfitti();?> Milioni di €
                                    <p>Durata: <?php echo $movie->getDurata();?> Minuti
                        
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                    
                <h1>Tv Series</h1>
                <div class="row pb-4">
                    <?php foreach($serieTv as $serieTv):?>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                            
                                    <h3 class="card-title"><?php echo $serieTv->getTitle();?></h3>
                                    <p>Language: <?php echo $serieTv->getLanguage();?>
                                    <p>Vote: <?php echo $serieTv->getVote();?>
                                    <p>Numero Stagioni: <?php echo $serieTv->getStagioni();?> 
            
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                
            </div>
        </main>
    </body>
</html>