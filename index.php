<?php

require_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

    <h1>Productions</h1>
    <ul>
        <?php foreach($productions as $production):?>
            <li>
                Title:<?php echo $production->getTitle();?><br>
                Language:<?php echo $production->getLanguage();?><br>
                Vote:<?php echo $production->getVote();?><br><br>

            </li>
        <?php endforeach;?>
    </ul>
    </main>
</body>
</html>