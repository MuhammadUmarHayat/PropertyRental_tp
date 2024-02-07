<?php
include("header.php");
include("nav.php");
include '../config.php';
session_start();
$username=   $_SESSION['username'];
$id= $_GET['id'];
$date=date('d/m/y');
$status="pending";
$query="INSERT INTO `tenant_flat`(`tenant`, `flatid`, `dateOfAllotment`, `status`) VALUES ('$username','$id','$date','$status')";
$insert = mysqli_query($con, $query); 

$message="Your request is submitted to manager";

?>
   <main>
      <?php echo $message?> 

</main>
      
<?php
include("footer.php");
?>





