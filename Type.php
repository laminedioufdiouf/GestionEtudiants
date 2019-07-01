<?php
    include  "Boursier.php";
    class type extends Bourse{
        //les atributs ou caracteristiaue de la class
        private $libelle;
        private $montant;
        // les methodes de la class
        public function __construct($libelle="",$montant=""){
                $this->libelle=$libelle;
                $this->montant=$montant;
        }
        public function getLibelle(){
            return $this->libelle;  
        }
        public function setLibelle($libelle){
            $this->libelle=$libelle;
        }
        public function getMontant(){
            return $this->montant;  
        }
        public function setMontant($montant){
            $this->montant=$montant;
        }
        
    }
