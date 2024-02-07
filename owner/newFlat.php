<?php 
session_start();
$username=   $_SESSION['username'];
$message="";
include '../config.php';
if (isset($_POST['save'])) 
{
    

    if (!empty($_FILES["image"]["name"]))
     {
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) 
        {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));


           $flatno = $_POST['flatno'];
           $rooms=$_POST['rooms'];
             $block =$_POST['block'];
           $address=$_POST['address'];
          $price=$_POST['price'];
          $socityName=$_POST['socityName'];
          $owner=$_POST['owner'];
            $status="vacant";
            
            $owner=$_POST['owner'];///////////////////////////////////////////////////////////////////////////////INSERT INTO `flats`( `flatno`, `rooms`, `block`, `address`, `price`, `photo`, `status`, `socityName`, `owner`) VALUES ('','','','','','','','','')


            $query = "INSERT INTO `flats`( `flatno`, `rooms`, `block`, `address`, `price`, `photo`, `status`, `socityName`, `owner`) VALUES ('$flatno','$rooms','$block','$address','$price','$imgContent','$status','$socityName','$owner')";

            $insert = mysqli_query($con, $query);



          
            header('Location:'.'flats.php');
        }
    }
}


include("header.php");
include("nav.php")?>

<main style="">
<section >
    <h1>
        Welcome <?php echo $username?>
    </h1>
    <div>
    <form method="post" action="newFlat.php" enctype="multipart/form-data">
                    <div class="center">
                        <table>

                            <tr>
                                <td>Society /Plaza Name </td>
                                <td><input type="text" name="socityName" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>Flat Number </td>
                                <td><input type="text" name="flatno" required> <span class="error">*</span> </td>
                            </tr>
                            

                            <tr>
                                <td>Rooms </td>
                                <td><input type="number" name="rooms" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>Block </td>
                                <td><input type="text" name="block" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>Address </td>
                                <td><input type="text" name="address" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>Price </td>
                                <td><input type="number" name="price" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Select Flat Photo:</label>
                                </td>
                                <td> <input type="file" name="image">
                                </td>
                            </tr>
                            
                            <tr>
                            <tr>
                                <td>Owner Name </td>
                                <td><input type="text" name="owner" required> <span class="error">*</span> </td>
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
   