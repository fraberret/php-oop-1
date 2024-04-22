<?php

include_once __DIR__ . '/../Models/Production.php';
include_once   __DIR__ . '/../Models/Movie.php';
include_once  __DIR__ . '/../Models/SerieTv.php';


$productions=[
    new Production ("Star Wars", "Italiano", 10),
    new Production ("Star Wars", "Italiano", 10)
];


$movies =[
    new Movie("Harry Potter e Il Calice Di Fuoco", "Italiano", 8 ,"896", "153"),
    new Movie("Natale A Miami", "Italiano", 9 , "896", "153" ),
];

$serieTv=[ 
    new SerieTv ("La Casa Di Carta", "Italiano", 5, 8)

];


?>





