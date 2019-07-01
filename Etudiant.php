<?php
namespace lamine;
    class Etudiant{
    //les atributs ou caracteristique des etudiants
        private $Matricule;
        private $Nom;
        private $Prenom;
        private $Email;
        private $Telephone;
        private $Naiss;
        //les methodes de constructeur de la class
        public function __conctruct($Matricule="",$Nom="",$Prenom="",$Email="",$Tel="",$Naiss=""){
            $this->Matricule=$Matricule;
            $this->Nom=$Nom;
            $this->Prenom=$Prenom;
            $this->Email=$Email;
            $this->Tel=$Tel;
            $this->Naiss=$Naiss;
        }
        //les getters et setters
        public function getMatricule(){
           return $this->$Matricule;
        }
        public function setMatricule($Matricule){
            $this->Matricule=$Matricule;
        }
        public function getNom(){
            return $this->Nom;
        }
        public function setNom($Nom){
            $this->Nom=$Nom;
        }
        public function getPrenom(){
            return $this->Prenom;
        }
        public function setPreom($Prenom){
            $this->Prenom=$Prenom;
        }
        public function getEmail(){
            return $this->Email;
        }
        public function setEmail($Email){
            $this->Email=$Email;
        }
        public function getTel(){
            return $this->Tel;
        }
        public function setTel($Tel){
            $this->Tel=$Tel;
        }
        public function getNaiss(){
            return $this->Naiss;
        }
        public function setNaiss($Naiss){
            $this->Naiss=$Naiss;
        }
        /*public function infos(){
            return $this->Matricule."," .$this->Nom. "," .$this->Prenom. ","
            .$this->Email. "," .$this->Tel. "," .$this->Naiss;
        }*/
   }    