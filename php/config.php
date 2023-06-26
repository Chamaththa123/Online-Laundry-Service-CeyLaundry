<?php
$db_name = "laundry";
$connection = mysqli_connect("localhost","root","",$db_name);


if ($connection -> connect_error)
{
    die ("Connection failed" . $connection -> connect_error);
    //exit();
}

?>