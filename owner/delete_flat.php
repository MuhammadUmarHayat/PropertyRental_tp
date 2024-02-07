<?php include '../config.php';
 

 $id= $_GET['id'];


 $insert = $con->query("DELETE FROM `flats` WHERE `id`='$id'"); 
    $insert = mysqli_query($con, $query);          
   //http://localhost/carrentals/admin/index.php#             
   header('Location:http://localhost/mytp/owner/flats.php');
 
 

?>