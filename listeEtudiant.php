<?php

if(isset($_POST['search'])){

}
else{
    $query= "SELECT * FROM Etudiant ";
     $search_result=filterTable($query);

}
function filterTable($query) {
    $connect =mysqli_connect("localhost","root","lamine","Universite");
    $filter_Result=mysqli_query($connect,$query) ;
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                Table,tr,th,td{
                    border: 1px solid black;
                }
                Table{
                    width:90%;
                }
        </style>
</head>
<body>  
                <center>
            <p style="text-align:center font-size:30px; color:violet" >Liste des ETUDIANTS de l'universite</p>
            <table>
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Naiss</th>
                </tr>
               <?php while($row=mysqli_fetch_array($search_result)):?>
                <tr>
                    <td> <?php echo $row['Matricule'];?></td>
                    <td> <?php echo $row['Nom'];?></td>
                    <td> <?php echo $row['Prenom'];?></td>
                    <td> <?php echo $row['Email'];?></td>
                    <td> <?php echo $row['Tel'];?></td>
                    <td> <?php echo $row['Naiss'];?></td>
                </tr>
                   <?php endwhile;?>
                   <p style="font-size: 30px"></p>
            </table>
            </center>
</body>
</html>