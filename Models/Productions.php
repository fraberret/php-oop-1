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

class Movie extends Production
{
    public $profitti='1';
    public $durata;

    public function getProfitti(){
        return $this->profitti; 
    }



}



