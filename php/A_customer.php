<?php

$conn = mysqli_connect('localhost', 'root', '', 'laundry') or die('connection failed');

$sql = "SELECT * FROM admin_account";
$result = $conn->query($sql);

session_start();
error_reporting(0);
$staff_id = $_SESSION['staff_id']; ?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidenav {
      height: 100%;
      width: 220px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color:
        /* #333*/
        #2E4053;
      overflow-x: hidden;
      padding-top: 10px;
    }

    /*.sidenav a {
  padding: 6px 18px 46px 16px;
  text-decoration: none;
  font-size: 18px;
  color: white;
  display: block;
}*/



    .main {
      margin-left: 204px;
      /* Same as the width of the sidenav */
      font-size: 15px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
      width: 84%;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }

    .sidenav a {
      display: block;
      text-align: ;
      padding-bottom: 15px;
      padding-top: 9px;
      transition: all 0.3s ease;
      color: white;
      font-size: 16px;
      text-decoration: none;
    }

    .sidenav a:hover {
      background-color: #000;
    }

    .active {
      background-color: #0074D9;
    }

    .header {
      margin: auto;
      height: 65px;
      background-color: #2E4053;
      padding-right: 10px;
      padding-bottom: 20px
    }


    .logo {
      padding-left: 5px;
      padding-top: 5px;
      height: 49px;
      width: auto;

    }

    .card3 {
      box-shadow: 1px 2px 3px 1px rgba(0, 0, 0, 0.4);
      margin: 8px 10px 20px 21px;
      /*font-family:time new roman;*/
      /*background-color: white;*/
      float: left;
      font-size: 14.5px;
    }

    .row {
      display: flex;
    }

    /* Create three equal columns that sits next to each other */
    .column9 {
      flex: 50%;
      padding: px;
      float: left;
    }

    .column10 {
      flex: 50%;
      padding: px;
      float: right;
    }

    .btn {

      color: white;
      padding: 4px 10px;
      padding-bottom: 5px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .column5 {
      float: left;
      width: 50%;
      padding: 10px;
      height: 58px;
      color: white;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 90%;
    }

    td,
    th {
      border: 1px solid #566573;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #AED6F1;
    }
  </style>
</head>

<body>

  <div class="sidenav">
    <?php
    $select = mysqli_query($conn, "SELECT * FROM admin_account WHERE staff_id = '$staff_id'") or die('query failed');
    if (mysqli_num_rows($select) > 0) {
      $fetch = mysqli_fetch_assoc($select);
    }
    ?>
    <div style="color:white">
      <i class='fas fa-user-cog' style='color: white;font-size:20px;padding:bottom:10px;padding-left:10px''></i> Admin <b><?php echo $fetch['a_username']; ?></b><br><br>
    <Center><img src=" <?php echo $fetch['image']; ?>" style="width:100px;height:auto"></center>
          <?php if ($fetch['image'] == NULL) { ?>
          <Center><img src="../images/how2.png" style="width:100px;height:auto"></center><?php } ?><br><br>
        </div>


        <a  href="admin.php"><i class=' fa fa-dashboard'
        style='color: white;font-size:20px;padding:bottom:10px;padding-left:25px'></i> Dash Board</a>
      <a class="active" href="A_customer.php"><i class='fas fa-user-friends'
          style='color: white;font-size:20px;padding:bottom:10px;padding-left:25px'></i> Customer Details</a>
      <a href="A_order.php"><i class='fas fa-cart-arrow-down'
          style='color: white;font-size:20px;padding:bottom:10px;padding-left:25px'></i> Oders Details</a>
      <a href="A_product.php"><i class='	fas fa-socks'
          style='color: white;font-size:20px;padding:bottom:10px;padding-left:25px'></i> Product</a>
      <a href="A_comment.php"><i class='fas fa-comment-dots'
          style='color: white;font-size:20px;padding:bottom:10px;padding-left:25px'></i> Customer Comment</a>
      <a href="A_admin.php"><i class='fas fa-user-cog'
          style='color: white;font-size:20px;padding:bottom:10px;padding-left:25px'></i> Admin Details</a>
      <a href="A_payment.php"><i class='fa fa-dollar'
          style='color: white;font-size:20px;padding:bottom:10px;padding-left:25px'></i> Payment Details</a>
    </div>

    <div class="main">
      <div class="header">
        <div class="row">

          <div class="column5">
            <p3 style="font-size:27px"><i class="fas fa-caret-right	" style="color: white;padding-top:24px"></i><b>
                CeyLaundry</b></p3>
          </div>

          <div class="column5">
            <p style="float:right;;color:white;font-size:25px;padding:bottom:20px;"><b><i class='fa fa-dashboard'
                  style='color:;font-size:25px;padding-left:25px'></i><i>DashBoard </i></b></p>
          </div>

        </div><br>
        <hr>

        <div class="card3" style="width:98%;height:auto;background-color:#F2F4F4  "><br>
          <?php $query1 = "SELECT * FROM customer";
          $result1 = mysqli_query($conn, $query1);
          if (mysqli_num_rows($result1) > 0) { ?>
            <center>
              <table>

                <tr>
                  <th></th>
                  <th>Id</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>City</th>
                  <th>Address Line1</th>
                  <th>Address Line1</th>
                  <th>Telephone</th>
                </tr>
                <?PHP while ($row = mysqli_fetch_array($result1)) {
                  ?>
                  <tr>
                    <td><img src=<?php echo $row['image']; ?> width="25px" height="25px"></td>
                    <td>
                      <?php echo $row['c_id']; ?>
                    </td>
                    <td>
                      <?php echo $row['c_firstname']; ?>
                    </td>
                    <td>
                      <?php echo $row['c_lastname']; ?>
                    </td>
                    <td>
                      <?php echo $row['c_email']; ?>
                    </td>
                    <td>
                      <?php echo $row['c_city']; ?>
                    </td>
                    <td>
                      <?php echo $row['c_address1']; ?>
                    </td>
                    <td>
                      <?php echo $row['c_address2']; ?>
                    </td>
                    <td>
                      <?php echo $row['c_telephone']; ?>
                    </td>
                  </tr>

                  <?php
                } ?>
              </table>
            </center>
            <br><br>
          <?php }
          ?>
        </div>

      </div>

</body>

</html>