<?php
include("header.php");
include("nav.php");
include '../config.php';
session_start();
$username=   $_SESSION['username'];
$id= $_GET['id'];
$date=date('d/m/u');
$status="rejected";
$query="update `tenant_flat` set `status`='$status' where `id`='$id'";
$insert = mysqli_query($con, $query); 

$message="User request has been rejected";

?>
   <main>
      <?php echo $message?> 

</main>
      
<?php
include("footer.php");
?>





