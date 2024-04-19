<?php

require_once 'db.php';

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
            <div class="row">
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
        </div>
    </main>
</body>
</html>