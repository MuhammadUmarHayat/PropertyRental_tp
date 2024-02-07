<?php 
session_start();
$username=   $_SESSION['username'];
$message="";
include '../config.php';
$id= $_GET['id'];
$id= $_GET['id'];
$result = $con->query("SELECT * FROM `flats` WHERE `id`='$id'");

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
	//SELECT `id`, `flatno`, `rooms`, `block`, `address`, `price`, `photo`, `status`,
    // `socityName`, `owner` FROM `flats` WHERE 1		
      $flatno=  $row['flatno'];
	  $rooms= $row['rooms'];
      $block=  $row['block'];
	  $address= $row['address'];
      $price=  $row['price'];
	 
      $socityName=  $row['socityName'];
	  $status= $row['status'];
      $owner=  $row['owner'];
     
		
	
		
}
}

if (isset($_POST['save'])) //update data
{
    

    $id= $_GET['id'];

           $flatno = $_POST['flatno'];
           $rooms=$_POST['rooms'];
             $block =$_POST['block'];
           $address=$_POST['address'];
          $price=$_POST['price'];
          $socityName=$_POST['socityName'];
          $owner=$_POST['owner'];
            $status="vacant";
            
            $owner=$_POST['owner'];///////////////////////////////////////////////////////////////////////////////INSERT INTO `flats`( `flatno`, `rooms`, `block`, `address`, `price`, `photo`, `status`, `socityName`, `owner`) VALUES ('','','','','','','','','')


            $query="UPDATE `flats` SET `flatno`='$flatno',`rooms`='$rooms',`block`='$block',`address`='$address',`price`='$price',`status`='$status',`socityName`='$socityName',`owner`='$owner' WHERE `id`='$id'";

            $insert = mysqli_query($con, $query);



          
            header('Location:'.'flats.php');
        }
   


include("header.php");
include("nav.php")?>

<main style="">
<section >
    <h1>
        Welcome <?php echo $username?>
    </h1>
    <div>
    <form method="post" action="edit_flat.php?id=<?php echo $id; ?>">
                    <div class="center">
                        <table>
                        <tr>
                                <td># </td>
                                <td><?php echo $id; ?></td>
                            </tr>
                            <tr>
                                <td>Society /Plaza Name </td>
                                <td><input type="text" name="socityName" value="<?php echo $socityName  ?>"></td>
                            </tr>
                            <tr>
                                <td>Flat Number </td>
                                <td><input type="text" name="flatno" value="<?php echo $flatno ?>"></td>
                            </tr>
                            

                            <tr>
                                <td>Rooms </td>
                                <td><input type="number" name="rooms" value="<?php echo $rooms ?>"></td>
                            </tr>
                            <tr>
                                <td>Block </td>
                                <td><input type="text" name="block" value="<?php echo $block  ?>"></td>
                            </tr>
                            <tr>
                                <td>Address </td>
                                <td><input type="text" name="address" value="<?php echo $address ?>"></td>
                            </tr>
                            <tr>
                                <td>Price </td>
                                <td><input type="number" name="price" value="<?php echo $price ?>"></td>
                            </tr>
                            
                            
                            <tr>
                            <tr>
                                <td>Owner Name </td>
                                <td><input type="text" name="owner" value="<?php echo $owner ?>"></td>
                            </tr>
                                <td> </td>
                                <td> <button type="submit" name="save"> Submit </button> </td>
                            </tr>
                        </table>
                        <?php
                        echo $message;
                        ?>
                    </div>
                </form>

    </div>




    
</section> 
</main>
   