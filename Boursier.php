<?php
    namespace lamine;
     class boursier extends Etudiant{
        //les atribbuts
        private $ID_Type;
        private $ID_Etudiant;
        public function __conctruct($Matricule="",$Nom="",$Prenom="",
        $Email="",$Tel="",$Naiss="",$ID_Type=""){
        //appel ala constructeur de la class parent
        parent::__construct($Matricule, $Nom, $Prenom, $Email, $Tel, $Naiss);
            $this->ID_Type=$ID_Type;
            $this->ID_Etudiant=$ID_Etudiant;
    }
    //les getters et setters
        
        public function getID_Type(){
            return $this->getID_Type;
        }
        public function setID_Type($ID_Type){
            $this->setID_Type=$ID_Type;
        }
        public function getID_Etudiant(){
            return $this->getID_Etudiant;
        }
        public function setID_Etudiant($ID_Etudiant){
            $this->setID_Type=$ID_Etudiant;
    }
    
}
