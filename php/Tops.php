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
    <title>Tops</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../css/footer.css" type="text/css" rel="stylesheet">
    <link href="../css/seletitem.css" type="text/css" rel="stylesheet">
    <style>


    </style>

</head>

<body>
    <?php
    include("header.php");

    ?>
    <!--------------------------------------------------------------------------------------------------------------------------------------->
    <hr>

    <center>
        <h2 style="font-family:Cambria;letter-spacing: 4px;"><i>Select Your Choice</h2></i>
    </center>
    <br>

    </div>
    <div>
        <div>
            <?php
            $query = "select * from product order by id asc";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
        </div>
        <div class="card3">
            <form method="post" action="Tops.php?action=add&id= <?php echo $row["id"]; ?>">
                <b>
                    <p style="font-size:20px;font-family:time new roman;">&nbsp;&nbsp;
                        <?php echo $row["Item_name"]; ?>
                    </p>
                </b>
                <img src="<?php echo $row["image"]; ?>" style="width:36%;float:left;height:195px;padding-bottom:15px">

                <p style="right:5px">
                    <?php echo "Item ID: " . $row["Item_id"]; ?>
                </p>
                <p>
                    <?php echo $row["Item_description"]; ?>
                </p>
                <p class="price3">
                    <?php echo "RS." . $row["price"]; ?>
                </p>
                <input type="number" name="quantity" style="padding: 5px 20px;width:115px;border-radius: 25px"
                    value="1">
                <input type="hidden" name="hidden_name" value="<?php echo $row["Item_name"]; ?>">
                <input type="hidden" name="hidden_name" value="<?php echo $row["Item_name"]; ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                <input type="hidden" name="hidden_id" value="<?php echo $row["Item_id"]; ?>">
                <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>">
                <input type="submit" name="add"
                    style="background-color:#0074D9;padding: 5px 38px;border-color:white;border-radius: 25px; color:white"
                    value="Add++">

            </form>
        </div>
        <div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <P style="text-align:right;font-size:17px;left:15px"><i class="	fas fa-certificate" style="color:#0074D9"></i>
        Minimum order value Rs.750.00&nbsp;&nbsp;<br>
        <button style="background-color:#0074D9;padding: 5px 38px;border-color:white;border-radius: 25px;"><a
                href="shopping_cart.php" style="color:white;text-decoration: none">Cart</a></button>&nbsp;&nbsp;
    </p>
    <br><br><br><br><br><br><br><br><br><br><br><br>


    </div>
    </div>
    </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>