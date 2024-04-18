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

$productionFirst = new Production();
$productionFirst -> title='First Production';
$productionFirst -> language='English';
$productionFirst -> vote='1';


var_dump($productionFirst);

$productionSecond = new Production();
$productionSecond -> title='Seconda Produzione';
$productionSecond-> language='Italiano';
$productionSecond-> vote='5';

var_dump($productionSecond);

?>