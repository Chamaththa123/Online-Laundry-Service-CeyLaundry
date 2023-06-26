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
    <div class="header">
      
        <img src = "../images/logo.png" class = "logo" >
        <center><p class="hello">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;
          &nbsp;&nbsp;<i class="	fas fa-certificate"></i>&nbsp; Say Hi to the Ceylaundry it’s time to enjoy free laundry ! </p></center>
        <a href="#"><img src="../images/basket.png" class="basket"></a>
        <a href="#"><img src="../images/avatar.png" class="user"></a>

    </div>
    <div class="navbar">
      <a  href="index.html"><i class="fa fa-fw fa-home"></i> Home</a> 
      <a href="how_it_work.html"><i class="far fa-arrow-alt-circle-right"></i> How It Works</a>
      <a href="../php/Tops.php"><i class="fas fa-cart-plus"></i> Order Now</a> 
      <a href="../php/contactUs.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
      <a href="#"><i class="fas fa-users"></i>   About Us</a>  
      <a class="active" href="#"><i class="fa fa-fw fa-user"></i> Login</a>
      <a href="#"><i class="	far fa-user-circle"></i> signup</a>

      <div class="search">
        <form action="#">
            <input type="text" style="width:300px;height:29px;background-color:white"
                placeholder=" Search your choice"
                name="search">
            <button>
                <i class="fa fa-search"
                    style="font-size: 18px;">
                </i>
            </button>
        </form>
    </div>
    </div>
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
</body>
</html>