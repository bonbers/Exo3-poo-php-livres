<?php

class Livre
{

    public $titre = " rhgtjhfkykuy";
    public $auteur;
    public $nbpages;
    public $prix;
    private $bool;

    public function __construct()
    {
        $ctp = func_num_args();
        $args = func_get_args();

        switch ($ctp) {
            case 3:
                $this->construct1($args[0], $args[1], $args[2]);
                break;
            case 4:
                $this->construct2($args[0], $args[1], $args[2], $args[3]);
                break;


            default:
                break;
        }
    }

    public function construct1(string $titre, string $auteur, int $nbpages)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbpages = $nbpages;
        $this->prix= -1;
        $this->bool=0;
    }

    public function construct2($titre, $auteur, $nbpages, $prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbpages = $nbpages;
        $this->prix = $prix;
    }

    public function __toString()
    {
        if($this->prix == -1){
            return 'Titre : '. $this->titre . '<br>' .
                'Auteur : ' . $this->auteur . '<br>' .
                'Nombre de pages : ' . $this->nbpages . '<br>' .
                'Prix : non renseigné<br>';

        } else{
            return 'Titre : '. $this->titre . '<br>' .
                'Auteur : ' . $this->auteur . '<br>' .
                'Nombre de pages : ' . $this->nbpages . '<br>' .
                'Prix : ' . $this->prix .'<br>';

        }
    }

    public function setlivre(string $titre, string $auteur, int $nbpages, $prix) {
        $this->titre=$titre;
        $this->auteur=$auteur;
        $this->nbpages=$nbpages;
        $this->prix=$prix;
    }

    public function bool(){
        if($this->prix== -1){
            $this->bool=0;
                return 'prix non fixé<hr> ';
        }
        else{
            $this->bool=1;
            return 'prix fixé<hr>';
        }
    }

}