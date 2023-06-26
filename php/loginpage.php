<!DOCTYPE html>
<html>

<head>
    <link href="../css/hf.css" type="text/css" rel="stylesheet">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
        
        <link href="../css/footer.css" type="text/css" rel="stylesheet">
<style>


/
@media screen and (max-width: 680px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  .vl {
    display: none;
  }
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>       
        
</head>

<body>
<?php 
    include ("header.php");
  
  ?>
    <hr>
<!--------------------------------------------------->
<div><br>
<center><img src = "../images/logo.png" width="200px" style="padding-top:30px;padding-bottom:30px">
<form method="POST" action="login.php">

      <div>
        <input type="text" name="email" style="margin: 15px;height:40px;border-radius:40px;width:290px" placeholder="&nbsp;&nbsp;&nbsp;Email" ><br>
        <input type="password" name="password" style="margin: 5px;height:40px;border-radius:40px;width:290px;" placeholder="&nbsp;&nbsp;&nbsp;Password" >
<br><br>
        <p style="padding-right:100px;font-size:13px;"><i class="fa fa-circle" style="color:#0074D9"></i> Forgot password? <a href=""> Click here</a></p>
        <P style="padding-right:69px;font-size:13px"><i class="fa fa-circle" style="color:#0074D9"></i> Don't have an account? <a href=""> Click here</a></P>

        <p><input type="submit" style="background-color:#0074D9;margin: 0px;height:40px;border-radius:40px;width:290px;font-size:15px" value="Sign In"></p>
               
        
      </div>
      
    </div>
  </form>
<br><br><br><br>
</div></center>
<?php 
    include ("footer.php");
  
  ?>
</body>
</html>