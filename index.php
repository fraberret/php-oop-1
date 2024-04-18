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
        $this->vote = max(1, min($vote, 10));;
    }

    


}

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