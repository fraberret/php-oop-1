<?php

require_once __DIR__ . '/Models/Productions.php';

$productionFirst = new Production("Harry Potter: L'Ordine Della Fenice", 'Italiano', 10);

echo "Produzione 1:<br>";
echo $productionFirst->getTitle()."<br>";
echo $productionFirst->getLanguage()."<br>";
echo $productionFirst->getVote()."<br> <br>";


$productionSecond = new Production('Natale a Miami', 'Italiano', 5);

echo "Produzione 2:<br>";
echo $productionSecond->getTitle()."<br>";
echo $productionSecond->getLanguage()."<br>";
echo $productionSecond->getVote()."<br>";


?>