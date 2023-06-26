<?php

$conn = mysqli_connect('localhost','root','','laundry') or die('connection failed');

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

session_start();
error_reporting(0);
$customer_id = $_SESSION['c_id'] ;


if(isset($_POST['update_flname'])){

	$update_fname = mysqli_real_escape_string($conn, $_POST['update_fname']);
	$update_lname = mysqli_real_escape_string($conn, $_POST['update_lname']);

   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   $update_city = mysqli_real_escape_string($conn, $_POST['update_city']);
   if(!empty($update_city)){
   
      mysqli_query($conn, "UPDATE customer SET c_city='$update_city' WHERE c_id = '$customer_id'") or die('query failed');
    }
   $update_tele = mysqli_real_escape_string($conn, $_POST['update_tele']);

   $update_addressline1 = mysqli_real_escape_string($conn, $_POST['update_addressline1']);
   $update_addressline2 = mysqli_real_escape_string($conn, $_POST['update_addressline2']);

   
 
	mysqli_query($conn, "UPDATE customer SET c_firstname = '$update_fname', c_lastname = '$update_lname', c_email='$update_email',c_telephone='$update_tele',c_address1 = '$update_addressline1' WHERE c_id = '$customer_id'") or die('query failed');	
   $update_image = mysqli_real_escape_string($conn, $_POST['update_image']);
   if(!empty($update_image)){
   
   mysqli_query($conn, "UPDATE customer SET image = '../images/$update_image' WHERE c_id = '$customer_id'") or die('query failed');
 }}

 

 header("location:update.php");
//
?>