<?php

class Production{
    public $title;
    public $language;
    public $vote;


    public function __construct($title, $language, $vote) {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }


}

$productionFirst = new Production('First Production', 'English', 1);



var_dump($productionFirst);

$productionSecond = new Production('Seconda Produzione', 'Italiano', 5);


var_dump($productionSecond);

?>