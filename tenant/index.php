<?php 
session_start();
$username=   $_SESSION['username'];
?>
<?php include '../config.php';
// Get image data from database 
$result = $con->query("SELECT * FROM `flats`");

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
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>"width=300px; height=150px; />
    </td>
<td>

Socity Name : <?php echo $row['socityName'] ?><br>
Flat Number :<?php echo $row['flatno'] ?> Rooms: <?php echo $row['rooms'] ?><br>
        
Block : <?php echo $row['block'] ?> <br>
Address: <?php echo $row['address'] ?><br>      
<?php echo $row['owner'] ?><br>
        
       
        <?php echo $row['price'] ?>PKR<br>
        
       Status: <?php echo $row['status'] ?><br>
       
        <?php echo '<a  text-decoration: none;"  href="sendRequest.php?id=' . $row['id'] . '">Send Request</a>';?>
        
         </td>   
    

<?php
      }
    }
                        ?>


</div>

    
</section> 
</main>
   