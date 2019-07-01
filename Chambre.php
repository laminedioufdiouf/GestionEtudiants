<?php
    include "Batiment.php";
    class chambre extends Batiment{
        // les caracteristique des chambre
        private $ID_Chambre;
        private $NomBatiment;
        private $ID_Batiment;
        //ls methodes de la class
        public function __construct($NomBatiment="",$ID_Chambre="",$ID_Batiment=""){
            $this ->ID_Bourse;
            $this ->ID_Chambre;
        }
        //les getters et setters
        public function getID_Bourse(){
            return $this->NomBatiment;
        }
        public function getID_Chambre(){
            return $this->ID_Chambre;
        }
        public function getID_Batiment(){
            return $this->getID_Batiment;
        }
        public function setNomBatiment($NomBatiment){
            $this->NomBatiment=$NomBatiment;
        }
        public function setID_Chambre($ID_Chambre){
            $this->ID_Chambre=$ID_Chambre;
        }
        public function setID_Batiment($ID_Batiment){
            $this->ID_Batiment=$ID_Batiment;
        }
        
       
    }
?>