<?php
class testconnexion{
    private $servername= "localhost";
    private $db= "Universite";
    private $username= "root";
    private $password= "lamine";


     function connexion(){
    try {
        $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->db, $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection bien faite";
        }
    catch(PDOException $e)
        {
        echo "Connection bien fait: " . $e->getMessage();
        }
    }
}
$connect= new testconnexion;
$connect->connexion();
 