<?php
namespace lamine;
class nonboursier extends Etudiant{
        //les atributs 
        private $_ID_Etudiant;
        private $adress;
    public function __conctruct($Matricule="",$Nom="",$Prenom="",
        $Email="",$Tel="",$Naiss="",$ID_Etudiant="",$Adress=""){
        //appel a la constructeur de la class parent
    parent::__construct($Matricule, $Nom, $Prenom, $Email, $Tel, $Naiss);
        $this->ID_Etudiant=$ID_Etudiant;
        $this->Adress=$Adress;
    }
    //les getters et setters
    public function getID_Etudiant(){
        return $this->ID_Etudiant;
    }
    public function setID_Etudiant($Etudiant){
        $this->ID_Etudiant=$ID_Etudiant;
    }
    public function getAdress(){
        return $this->getAdress;
    }
    public function setAdress($Adress){
        $this->Adress=$Adress;
    }
    public function infos(){
        return parent::infos() . "," .$this->ID_Etudiant. "," .$this->adress;
    }
}

