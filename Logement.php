<?php
namespace lamine;
//class
    class loger extends bourse {
        private $_ID_Type;
        private $ID_Chambre;
        public function __construct($ID_Etudiant="",$_ID_Type="",$ID_Chambre=""){
            //appel a la constructeur parent
           /* parent::__construct($_ID_Etudiant="");*/
            $this->ID_Type=$_ID_Type;
            $this->ID_Chambre=$_ID_Chambre;
        }
        //les getters et setters
        public function getID_Type(){
            return $this->ID_Type;
        }
        public function setID_Type($_ID_Type){
            $this->getID_Type=$ID_Type;
        }
        public function getID_Chambre(){
            return $this->ID_Chambre;
        }
        public function setID_Chambre($_ID_Chambre){
            $this->getID_Chambre=$ID_Chambre;
        }
        
    }
