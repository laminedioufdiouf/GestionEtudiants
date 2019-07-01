<?php
namespace lamine;
class batiment{
    //les atributs
    private $ID_Batiment;
    Private $NomBatiment;
    //les methodes de constructeurs
    public function __construct($ID_Batiment="",$NomBatiment=""){
        $this ->ID_Batiment;
        $this->NomBatiment;
    }
    //lesgetters et les setters
    public function getID_Batiment(){
        return $this->ID_Batiment;
    }
    public function getNom(){
        return $this->NomBatiment;
    }
    public function setID_Batiment($ID_Batiment){
        $this->setID_Batiment=$ID_Batiment;
    }
    public function setNom($NomBatiment){
        $this->Nom=$NomBatiment;
    }
}