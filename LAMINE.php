<?php

class EtudiantService {
    protected $bdd;

   public function __construct( $login="root", $password="lamine", $server="localhost",$dbname="Universite"){
      try{
          $this->bdd=new PDO ("mysql:host={$server};dbname={$dbname}", $login,$password);
          $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $e){
          throw new exception($e->getMessage());
      }
  }
     public function findAll($table){
    try{
        $prepare=$this->bdd->prepare("select * from $table");
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_OBJ);
    }
    catch(PDOException $e){
        throw new Exception ($e->getMessage());
    }
}
    public function find($lamine){
    try{
        $prepare=$this->bdd->prepare("select * from Etudiant where ID_Etudiant= $lamine");
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_OBJ);
    }
    catch(PDOException $e){
        throw new Exception ($e->getMessage());
    }
}
    public function findBoursier($diouf){
    try{
        $prepare=$this->bdd->prepare("select * from Boursier where ID_Etudiant=$diouf");
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_OBJ);
    }
    catch(PDOException $e){
        throw new Exception ($e->getMessage());
    }
}  
    public function findAllBoursier($Boursier){
    try{
        $prepare=$this->bdd->prepare("select * from $Boursier");
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_OBJ);
    }
    catch(PDOException $e){
        throw new Exception ($e->getMessage());
    }
}
  public function add($matricule,$nom, $prenom, $tel, $email, $naiss){
     try{
         $prepare=$this->bdd->prepare("insert into Etudiant (Matricule,Nom, Prenom, Email, Tel, Naiss)
          VALUES        
          (:Matricule,:Nom, :Prenom,  :Email, :Tel, :Naiss)");
          $prepare->bindParam(':Matricule', $matricule);
          $prepare->bindParam(':Nom', $nom);
          $prepare->bindParam(':Prenom', $prenom);
          $prepare->bindParam(':Email', $email);
         $prepare->bindParam(':Tel', $tel);
        $prepare->bindParam(':Naiss', $naiss);
         $prepare->execute();
         return true;
     }
     catch(PDOException $e){
         throw new Exception ($e->getMessage());
     }

 }


}









