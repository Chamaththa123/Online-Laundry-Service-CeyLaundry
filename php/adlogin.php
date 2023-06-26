<?php

require 'config.php';
session_start();


if(isset($_POST['aname'])){

    $uname = $_POST['aname'];
    $upassword = $_POST['apassword'];

    $sql = "select * from admin_account where a_username = '".$uname."' AND a_password = '".$upassword."' limit 1";
    
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['staff_id'] = $row['staff_id'];
        echo"You have uccessfully logged in";

        header("Location: Admin.php");
        //exit();

    }
    else{

        echo "<script>alert('You have entered incorrect username or password!'); window.location='adminlogin.php'</script>";
        //echo "<script>alert('You have entered incorrect username or password');</script>";
        //echo"You have entered incorrect username or password";
        //exit();
    }
}

?>