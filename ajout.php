<?php
protected $bdd;
$con=mysql_connect("localhost" , "root" , "lamine");
mysql_select_db("Universite",$con);
//recuperation des données
$m=$_POST['tmatricule'];
$n=$_POST['tnom'];
$p=$_POST['tprenom'];
$e=$_POST['temail'];
$t=$_POST['ttel'];
$n=$_POST['tnaiss'];
$req="insert into Etudiant values ('','$m','$n','$p','$e','$t','$n')";
echo($req);
mysql_query($req);
mysql_close();
?>