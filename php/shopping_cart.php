<?php
include("process.php");
?>
<?php
include("config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <link href="../css/hf.css" type="text/css" rel="stylesheet">

    <title>shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../css/footer.css" type="text/css" rel="stylesheet">
    <style>
        .card3 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
            width: 350px;
            height: 360px;
            margin: 3px 3px 19px 33px;
            font-family: arial;
            background-color: white;
            padding-left: 30px;
            padding-right: 30px
        }

        .card2 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
            width: 450px;
            height: auto;
            margin: 3px 3px 19px 3px;
            text-align: center;
            font-family: arial;
            background-color: white;
            text-align: right;
        }

        table,
        td,
        th {
            border: 0px solid;
            padding: 15px;
        }

        table {

            border-collapse: collapse;
            padding-left: 5px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        span.price {
            float: right;
            color: grey;
        }
    </style>
</head>

<body>
    <?php
    include("header.php");

    ?>

    <br>
    <!---------------------------------------------------------------------------------------------------------->
    <center>
        <p style="font-size:35px;color:"><i>Your Items</i></p>
    </center>
    <div>
        <?php
        if (!empty($_SESSION["shopping_cart"])) {

            $total = 0;
            $total_quantity = 0;
            $sub = 0;
            $discount = 0; ?>

            <table width="65%" style="padding-left:30px;  border-collapse: collapse;">
                <tr>
                    <th></th>
                    <th>Item ID</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Sub Total</th>
                    <th></th>
                </tr> <br><br>

                <?php foreach ($_SESSION["shopping_cart"] as $key => $value) { ?>

                    <tr>
                        <td align="center"><img src="<?php echo $value["product_image"]; ?>" width="60px" height="60px"></td>
                        <td align="center">
                            <?php echo $value["item_id"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $value["product_name"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $value["product_quantity"]; ?>
                        </td>
                        <td align="center">
                            <?php echo "RS." . $value["product_price"]; ?>
                        </td>
                        <td align="center">
                            <?php echo "RS." . number_format($value["product_quantity"] * $value["product_price"], 2); ?>
                        </td>
                        <td align="center"><a href="shopping_cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><i
                                    class='fa fa-trash-o' style='color:#0d0d0c;font-size:24px'></i></a></td>
                    </tr>

                    <?php
                    $sub = $sub + ($value["product_quantity"] * $value["product_price"]);
                    $total_quantity = $total_quantity + $value["product_quantity"];
                    if ($sub >= 7000) {
                        $discount = $sub * (8 / 100);

                    }
                    $total = $sub - $discount;

                } ?>
                <br>

                <div style="float:right;padding:20px;padding-bottom:15px">
                    <div class="card3"><br>
                        <center>
                            <div><img src="../images../logo.png" height="50">
                        </center><br><br>
                        <form method="POST" action="submit.php">


                            <p>Total Price :<span class="price">
                                    <?php echo "Rs." . number_format($sub, 2); ?>
                                </span></p>
                            <p>Quanity :<span class="price">
                                    <?php echo $total_quantity; ?>
                                </span></p>
                            <p>Discount :<span class="price">
                                    <?php echo "Rs." . number_format($discount, 2); ?>
                                </span></p>
                            <p>Final Price :<span class="price">
                                    <?php echo "Rs." . number_format($total, 2); ?>
                                </span></p>
                            <a href="card.php"><button name="submitorder"
                                    style="background-color:#0074D9;padding: 10px 105px;border-color:white; color:white;">Place
                                    Order</button></a><br>
                            <p style="font-size:13px"><i class="fas fa-certificate"
                                    style="font-size:13px;color:#0074D9"></i>&nbsp;&nbsp;&nbsp;If total price is more than
                                Rs.7000.00, 8% discount applies. </p>
                        </form>
                        <br>
                    </div>
                </div>
        </div>
        </table>
        </div>
        <div>
            <?php
        } else {
            echo "<center>You have no items in your basket.</center>";
        }
        ?>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!---------------------------------------------------------->
    <div>
        <?php
        include("footer.php");
        ?>
    </div>
</body>

</html>