<?php

class Production{
    public $title;
    public $language;
    public $vote;

}

$productionfirst = new Production();
$productionfirst -> title='First Production';
$productionfirst -> language='English';
$productionfirst -> vote='1';


var_dump($productionfirst)


?>