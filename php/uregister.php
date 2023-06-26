<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laundry";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


session_start();



if (isset($_SESSION['email'])) {
    header("Location: login.php");
}

if(isset($_POST['submit']))
{  
    $firstname = $_POST['firstName'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $lastname = $_POST['lastName'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $city = $_POST['citys'];


    
    
    
    if( $password == $confirmpassword)
    {
        $sql = "SELECT * FROM Customer WHERE c_email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (!$result->num_rows > 0) 
        {
            $sql = "INSERT INTO customer (c_email, c_firstname, c_lastname, c_city, c_address1, c_address2, c_telephone,  c_password)
            VALUES ('$email', '$firstname', '$lastname', '$city', '$address1', '$address2', '$telephone', '$password')";
            
            if (mysqli_query($conn, $sql)) 
            {
                echo "<script>alert('New record created successfully');</script>";
                header('location: login.php');
            }
            else 
            {
                echo "<script>alert('Oops ! Something went wrong !');</script>" ;
            } 

        }
        else 
        {
			echo "<script>alert('Email or Telephone Number Already Exists.');</script>";
		}


    }

    else
    {
        echo "<script>alert('Passwords do not match');</script>";
    }
    

    
}
?>
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
/*body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}
*/
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container12 { 
width:50%;       
  padding: 16px;
  background-color: white;
  text-align:left;
  background-color: #ccd0e4;
}

/* Full-width input fields */
/*input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}*/

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: wte;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color:;
  text-align: center;
}
</style>
        
</head>

<body>
<?php 
    include ("header.php");
  
  ?>

    <hr>
<!---------------------------------------------------------------------------------->
<center><form method=post action="#">
  <div class="container12">
    <center><h1>Create New Account</h1></center>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label ><b>First Name:</b></label>
    <input type="text" style="margin: 5px 0 22px 0;width: 100%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;" placeholder="Enter Email" name="firstName" id="email" required>

    <label><b>Last Name:</b></label>
    <input type="text" style="margin: 5px 0 22px 0;width: 100%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;" placeholder="Enter Email" name="lastName" id="email" required>

    <label ><b>Email:</b></label>
    <input type="text" style="margin: 5px 0 22px 0;width: 100%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;" placeholder="Enter Email" name="email" id="email" required>

    <label><b>Password:</b></label>
    <input type="password" style="margin: 5px 0 22px 0;width: 100%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;" placeholder="Enter Password" name="password" id="psw" required>

    <label><b>Confirm Password:</b></label>
    <input type="password" style="margin: 5px 0 22px 0;width: 100%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;" placeholder="Enter Password" name="confirmpassword" id="psw" required>

    <label><b>Telephone:</b></label>
    <input type="text" style="margin: 5px 0 22px 0;width: 100%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;" placeholder="Enter Email" name="telephone" id="email" required>
    
    <label><b>Address Line 1:</b></label>
    <input type="text" style="margin: 5px 0 22px 0;width: 100%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;" placeholder="Enter Email" name="address1" id="email" required>
    
    <label><b>Address Line 2:</b></label>
    <input type="text" style="margin: 5px 0 22px 0;width: 100%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;" placeholder="Enter Email" name="address2" id="email" required>
    
    
    <label><b>City:</b></label>
    <select id="city" class="reg" name = "citys"  required style="margin: 5px 0 22px 0;width: 100%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;">
                <option id="city0" value="">City</option>
                <option id="city1" value="Colombo">Colombo</option>
                <option id="city2" value="Negombo">Negombo</option>
                <option id="city3" value="Ja-Ela">Ja-Ela</option>
                <option id="city4" value="Malabe">Malabe</option>
                <option id="city5" value="Matara">Matara</option>
                <option id="city6" value="Kandy">Kandy</option>
                <option id="city7" value="Jaffna">Jaffna</option>
            </select>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  
    <input type="submit" id="buttonSub" value="Create Account" class="registerbtn" name = "submit" />
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form></center>


<!----------------------------------------------------------------------------------->
<?php
include("footer.php");
?>
<!----------------------------------------------------------------------------------->
</body>
</html>