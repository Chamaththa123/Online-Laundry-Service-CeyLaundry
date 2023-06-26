<?php

    $db_name = "laundry";
    $connection = mysqli_connect("localhost","root","",$db_name);
	session_start();
	error_reporting(0);
	$customer_id = $_SESSION['c_id'] ;
	$dis=$_SESSION[$discount];
	
	 if(isset($_POST["submitorder"]))
	 {
		 $items_sql = "";
			$total = 0;

		foreach($_SESSION["shopping_cart"] as $key => $value){
			$sub+= $value["product_quantity"] * $value["product_price"];
			if($sub >= 7000)
			{
				$discount = $sub*(8/100);
				
			}
			$total=$sub-$discount;
			}



		$order_insert_sql = "INSERT INTO orders ( customer_id , total , date ,discount)VALUES ( '$customer_id' , '$total', now(),'$discount')";



	if (mysqli_query($connection, $order_insert_sql )) {
	$order_id = mysqli_insert_id($connection);
		
	foreach($_SESSION["shopping_cart"] as $key => $value){
		$qty = $value["product_quantity"];

		$price = $value["product_price"];
		
		$product_id = $value["product_id"];
		
		$product_name = $value["product_name"];
		
		$sub_total = $qty * $price;
		
		$items_sql .= "INSERT INTO oder_details ( order_id , qty , price, sub_total, product_id, product_name) VALUES ( '$order_id', '$qty' , '$price', '$sub_total', '$product_id', '$product_name');";
	}
	

	if (mysqli_multi_query($connection, $items_sql)) {
		echo '<script>alert("success!!")</script>';
		echo '<script>window.location="card-details.php"</script>';
	}else{
	echo "failed";
		}

	}else{
		echo '<script>alert("You must Login First !");</script>';
		echo '<script>window.location="loginpage.php"</script>';
	}
	}
	
	
?>
