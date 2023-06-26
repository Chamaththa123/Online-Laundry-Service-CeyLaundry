<?php

require 'config.php';

session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {

    $uemail = $_POST['email'];
    $upassword = $_POST['password'];

    if (empty($uemail)) {

        //echo "<script>alert('User email is required!');</script>";
        echo "<script>alert('User email is required!'); window.location='loginpage.php'</script>";
        //header("Location:loginpage.php");
        // exit();
    } else if (empty($upassword)) {
        echo "<script>alert('User password is required!');</script>";
        //header("Location:loginpage.php");
        //exit();
    } else {

        $sql = "SELECT * FROM customer WHERE c_email='$uemail' AND c_password='$upassword'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);


            if ($row['c_email'] === $uemail && $row['c_password'] === $upassword) {

                $_SESSION['c_email'] = $row['c_email'];

                $_SESSION['c_password'] = $row['c_password'];

                $_SESSION['c_id'] = $row['c_id'];

                $_SESSION['c_firstname'] = $row['c_firstname'];

                $_SESSION['c_lastname'] = $row['c_lastname'];

                $_SESSION['c_city'] = $row['c_city'];

                $_SESSION['c_address1'] = $row['c_address1'];

                $_SESSION['c_address2'] = $row['c_address2'];

                $_SESSION['c_telephone'] = $row['c_telephone'];

                $_SESSION['userAccountId'] = $row['userAccountId'];

                //echo "<script>alert('You have successfully logged in!'');</script>";
                //echo "<script>alert('You have successfully logged in!'); window.location='loginpage.php'</script>";
                $_SESSION['message'] = "You have successfully logged in!";

                header('location: userprofile.php');
                //echo "You have successfully logged in";
                //exit();

            } else {

                // echo "You have entered incorrect email or password";
                echo "<script>alert('Incorect User email or password!'); window.location='loginpage.php'</script>";
                //header("Location: loginpage.php");
                //exit();

            }

        } else {

            // echo "You have entered incorrect email or password";
            echo "<script>alert('Incorect User email or password!'); window.location='loginpage.php'</script>";
            //echo "<script>alert('Incorect User email or password!');</script>";
            //header("Location: loginpage.php");
            //exit();

        }

    }

} else {

    header("Location:loginpage.php");
    exit();
}

?>