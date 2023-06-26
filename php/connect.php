<?php
    session_start();

    //insert data

    $db = mysqli_connect('localhost', 'root', '', 'laundry');

    if(isset($_POST['btn']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $query = "INSERT INTO commentsection (FirstName, LastName, PhoneNumber,Email, Comment) VALUES ('$firstName','$lastName','$number',
        '$email','$comment')" ;

        mysqli_query($db,$query);
        $_SESSION['Msg'] = "Submitted successfully";
        header('location:contactUs.php');

    }

    //delete records
    if(isset($GET['del']))
    {
        $ID = $GET['del'];
        mysqli_query($db, "DELETE FROM commentsection WHERE ID = $ID");
        $_SESSION['Msg'] = "Record deleted";
        header('location: Final_contact.php');

    }

    //retrieve data

    $results = mysqli_query($db, "SELECT * FROM commentsection");

    
?>