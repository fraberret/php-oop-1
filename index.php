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
            <ul class="list-group">
                <?php foreach($productions as $production):?>
                    <li class="list-group-item">
                        <strong>Title</strong>: <?php echo $production->getTitle();?><br>
                        <strong>Language</strong>: <?php echo $production->getLanguage();?><br>
                        <strong>Vote</strong>: <?php echo $production->getVote();?><br><br>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </main>
</body>
</html>