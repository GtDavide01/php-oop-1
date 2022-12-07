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
        return "Titolo  : $this->title ; <br>  Genere : $this->genere ; <br> Durata : $this->durata ;<br> Lingua : $this->lingua ;<br>  Descrizione :  $this->description ;";
    }
}
