<?php
class Movie
{
    public $title;
    public $genere;
    public $description;
    public $durata;
    public $lingua;

    function __construct($title, $genere, $durata, $lingua,  $description = " ")
    {
        $this->title = $title;
        $this->genere = $genere;
        $this->durata = $durata;
        $this->lingua = $lingua;
        $this->description = $description;
    }
    public function getInfoMovie()
    {
        return "Titolo  : $this->title ; Genere : $this->genere ; Durata : $this->durata ; Lingua : $this->lingua ;  Descrizione : $this->description ;";
    }
}
