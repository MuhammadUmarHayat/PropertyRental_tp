<?php 
session_start();
$username=   $_SESSION['username'];
?>
<?php include '../config.php';
// Get image data from database 
$result = $con->query("SELECT * FROM `tenant_flat`");

?>

<?php
include("header.php");
include("nav.php")?>

<main style="">
<section >
    <h1>
        Welcome <?php echo $username?>
    </h1>
    


<div>

<?php  if ($result && $result->num_rows > 0) 
  {
     while ($row = $result->fetch_assoc())
    {
        
    ?>
<table>
    <tr>
        <td>
        Flat ID : <?php echo $row['flatid'] ?><br>
    </td>
<td>


Tenant Name :<?php echo $row['tenant'] ?> 
<br>
        
Requested Date : <?php echo $row['dateOfAllotment'] ?> <br>

        
       Status: <?php echo $row['status'] ?><br>
       
        <?php echo '<a  text-decoration: none;"  href="approveRequest.php?id=' . $row['id'] . '">Approve Request</a>';?>
        <?php echo '<a  text-decoration: none;"  href="rejectRequest.php?id=' . $row['id'] . '">Reject Request</a>';?>
        
         </td>   
    

<?php
      }
    }
                        ?>


</div>

    
</section> 
</main>
   