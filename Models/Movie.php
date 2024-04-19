<?php

require 'Models/Productions.php';

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

?>