<!DOCTYPE html>
<html>

<head>
    <link href="../css/hf.css" type="text/css" rel="stylesheet">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="Stylesheet" href="../css/adminlogin.css">

</head>

<body>

    <?php
    include("header.php");

    ?>

    <br>
    <div><br>
        <center><img src="../images/logo.png" width="200px" style="padding-top:30px;padding-bottom:30px">
        <h3>Employee Login</h3>
            <form method="POST" action="adlogin.php">

                <div>
                    <input type="text" name="aname" placeholder="Username"
                        style="margin: 15px;height:40px;border-radius:40px;width:290px"><br>
                    <input type="password" name="apassword" placeholder="Password"
                        style="margin: 5px;height:40px;border-radius:40px;width:290px;">
                    <br><br>


                    <p><input type="submit"
                            style="background-color:#0074D9;margin: 0px;height:40px;border-radius:40px;width:290px;font-size:15px"
                            value="Sign In"></p>


                </div>

    </div>
    </form>
    <br><br><br><br>
    </div>
    </center>

    <?php
    include("footer.php");

    ?>



</body>

</html>