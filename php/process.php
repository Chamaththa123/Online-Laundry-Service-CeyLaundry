<?php
session_start();
$db_name = "laundry";
$connection = mysqli_connect("localhost", "root", "", $db_name);

if (isset($_POST["add"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_id' => $_POST["hidden_id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
                'product_image' => $_POST["hidden_image"],
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            echo '<script>window.location="Tops.php"</script>';
        } else {
            echo '<script>alert("Product is already in  the cart")</script>';
            echo '<script>window.location="Tops.php"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_id' => $_POST["hidden_id"],
            'product_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'product_quantity' => $_POST["quantity"],
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

/* ----------------------------------------delete----------------------------------------------------*/
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Product has been removed")</script>';
                echo '<script>window.location="shopping_cart.php"</script>';
            }
        }
    }
}
?>