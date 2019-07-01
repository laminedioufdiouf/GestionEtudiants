<?php

if(isset($_POST['search'])){

}
else{
    $query= "SELECT * FROM Boursier ";
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
                    <th>ID_Etudiant</th>
                    <th>ID_Type</th>

                </tr>
               <?php while($row=mysqli_fetch_array($search_result)):?>
                <tr>
                    <td> <?php echo $row['ID_Etudiant'];?></td>
                    <td> <?php echo $row['ID_Type'];?></td>
                    
                </tr>
                   <?php endwhile;?>
                   <p style="font-size: 30px"></p>
            </table>
            </center>
</body>
</html>