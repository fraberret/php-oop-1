<?php

require_once __DIR__ . '/Production.php';

class SerieTv extends Production{

    public $numerodistagioni;

    public function getStagioni(){
        return $this->numerodistagioni; 
    }

    public function __construct($title, $language, $vote, $numerodistagioni) {
        
        parent::__construct($title, $language, $vote);
        $this->numerodistagioni = $numerodistagioni;
       
    }





}

?>