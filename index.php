<?php

class Production{
    public $title;
    public $language;
    public $vote;

public function getTitle(){
        return $this->title; 
    }
    public function getLanguage(){
        return $this->language; 
    }
    public function getVote(){
        return $this->vote; 
    }

    public function __construct($title, $language, $vote) {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }

    


}

$productionFirst = new Production('First Production', 'English', 1);


echo $productionFirst->getTitle();
echo $productionFirst->getLanguage();
echo $productionFirst->getVote();


$productionSecond = new Production('Seconda Produzione', 'Italiano', 5);

echo $productionSecond->getTitle();
echo $productionSecond->getLanguage();
echo $productionSecond->getVote();


?>