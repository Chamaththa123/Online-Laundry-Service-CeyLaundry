<?php

$conn = mysqli_connect('localhost','root','','laundry') or die('connection failed');

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

session_start();
error_reporting(0);
$customer_id = $_SESSION['c_id'] ;?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/update_profile.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM customer WHERE c_id = '$customer_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="edit.php" method="POST">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="../images/default-avatar.png">';
         }else{?>
            <img src=" <?php echo $fetch['image']; ?>" style="width:100px;height:auto">
         <?php }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>Your First Name :</span>
            <input type="text" name="update_fname" value="<?php echo $fetch['c_firstname']; ?>" class="box">
            <span>Your Last Name :</span>
            <input type="text" name="update_lname" value="<?php echo $fetch['c_lastname']; ?>" class="box">
            <span>Your Email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['c_email']; ?>" class="box">
			<span>Your City :</span>
			<select id="city" class="box" name = "update_city">
                <option id="city0" value=""><?php echo $fetch['c_city']; ?></option>
                <option id="city1" value="Colombo">Colombo</option>
                <option id="city2" value="Negombo">Negombo</option>
                <option id="city3" value="Ja-Ela">Ja-Ela</option>
                <option id="city4" value="Malabe">Malabe</option>
                <option id="city5" value="Matara">Matara</option>
                <option id="city6" value="Kandy">Kandy</option>
                <option id="city7" value="Jaffna">Jaffna</option>
            </select>
            
         </div>
         <div class="inputBox">
		 <span>Your Address Line 1 :</span>
            <input type="text" name="update_addressline1" value="<?php echo $fetch['c_address1']; ?>" class="box">
			<span>Your Address Line 2 :</span>
            <input type="text" name="update_addressline2" value="<?php echo $fetch['c_address2']; ?>" class="box">
			<span>Your Telephone :</span>
            <input type="tel" name="update_tele" value="<?php echo $fetch['c_telephone']; ?>" class="box">
            <span>Update Your Profile Picture :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         
		 
         
      </div>
      <input type="submit" value="update" name="update_flname" class="btn">
      <a href="userprofile.php" class="delete-btn">go back</a>
   </form>

</div>

</body>
</html>