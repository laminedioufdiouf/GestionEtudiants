<?php

include 'LAMINE.php';
$objet =new EtudiantService();

//$rep=$objet->findAll("Etudiant");

//var_dump($rep);


$diouf=$objet->add('201405gfhfh','ndvvg','zahra','775466987','zahra@gmail.com','1990-10-01');
var_dump($diouf);


//$mbacke=$objet->find("24");
//var_dump($mbacke);


//$lama=$objet->findBoursier("1");
//var_dump($lama);

//$Boursier=$objet->findAll('?');
//var_dump($Boursier);