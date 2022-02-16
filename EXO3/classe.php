<?php

class Guerrier{
    //-----variables-----//
    public $niveau;
    public $nom;
    public $âge;
    public $force;
    public $arme;

    //------constructor------//
    public function __construct($NI, $N, $A, $F, $AR)
    {
        $this->niveau = $NI;
        $this->nom = $N;
        $this->âge = $A;
        $this->force = $F;
        $this->arme = $AR;
    }

    //-----------geters--------//
    public function getNiveau(){
        return $this->niveau;
    }

    public function getNom(){
        return $this->nom;
    }

    
    public function getÂge(){
        return $this->âge;
    }

    public function getForce(){
        return $this->force;
    }

    
    public function getArme(){
        return $this->arme;
    }

    //----------setters --------//
    public function setNiveau($NewNiveau){
        $this->niveau = $NewNiveau;
    }

    public function setNom($NewNom){
        $this->nom = $NewNom;
    }

    public function setÂge($NewÂge){
        $this->âge = $NewÂge;
    }

    public function setForce($NewForce){
        $this->force = $NewForce;
    }

    public function setArme($NewArme){
        $this->arme = $NewArme;
    }

}

?>