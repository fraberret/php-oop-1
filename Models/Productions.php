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
        $this->vote = max(1, min($vote, 10));
    }



}

class Movie extends Production{

    public $profitti;
    public $durata;

    public function getProfitti(){
        return $this->profitti; 
    }
        public function getDurata(){
            return $this->durata; 
    }

    public function __construct($title, $language, $vote, $profitti, $durata) {
        
        parent::__construct($title, $language, $vote);
        $this->profitti = $profitti;
        $this->durata = $durata;
    }





}

$productions= new Production("Harry Potter e Il Calice Di Fuoco", "Italiano", 8);
    






?>

