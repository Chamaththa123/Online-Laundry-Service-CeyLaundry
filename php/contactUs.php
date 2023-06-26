<?php
  include("config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <link href="../css/hf.css" type="text/css" rel="stylesheet">
  <link href="../css/contactUs.css" type="text/css" rel="stylesheet">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../css/footer.css" type="text/css" rel="stylesheet">
</head>

<body>
<?php 
    include ("header.php");
  
  ?>
    <hr>

    <?php
    if(isset($_SESSION['msg'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
        </div>
  <?php endif ?>

<div class="bg-img">
  <form action="../php/connect.php" class="form" method="POST">
    <center><h1>Contact Us</h1></center>

    <label><b>First Name:</b></label>
    <input type="textarea" placeholder="Enter First Name" name="firstName" required>

    <label><b>Last Name:</b></label>
    <input type="textarea" placeholder="Enter Last name" name="lastName" required>

    <label><b>Phone Number:</b></label>
    <input type="tel" placeholder="0xx xxxxxxx" name="number" required>

    <label><b>Email:</b></label>
    <input type="email" placeholder="abc@gmail.com" name="email" required>

    <label><b>Comment:</b></label>
    <textarea rows="7" placeholder=" Write Comment" name="comment" required></textarea>

    <button type="submit" class="btn" name="btn">Submit</button>
  </form>
</div>



<div class="detail">
<div class="row">
        
    <div class="column5">
        <center><p3><i class="	fa fa-map-marker" style="color: white;"></i> A/627,Maththamagoda,Kotiyakumbura</p3></center>
    </div>
    
    <div class="column5" >
        <center><p3><i class="fa fa-volume-control-phone"  style="color: white;"></i> 035-2288357</p3></center>
    </div>

    <div class="column5">
        <center><p3><i class="fa fa-envelope-open"  style="color: white;"></i> info@ceylaundry.lk</p3></center>
    </div>
  </div>
</div>

 <!----------------------------------------------------------------------------------->
 
  
 <?php 
    include ("footer.php");
  
  ?>

</body>
</html>