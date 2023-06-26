<?php

$conn = mysqli_connect('localhost', 'root', '', 'laundry') or die('connection failed');

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

session_start();
error_reporting(0);
$customer_id = $_SESSION['c_id']; ?>

<!DOCTYPE html>
<html>

<head>
  <title>User Profile</title>
  <link href="../css/hf.css" type="text/css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../css/footer.css" type="text/css" rel="stylesheet">
  <style>
    body {
      background-color: ;
    }

    .column0 {
      float: right;
      width: 28%;
      height: auto;
      margin-bottom: 2px;
      margin-left: 24px;
    }

    .column {
      float: left;
      width: 35.8%;
      padding: 25px;
      height: 750px;
      background-color: #154360;
    }

    .column4 {
      float: left;
      width: 65%;
      padding: 0px;
      height: 750px;
      /*margin-left : 55px ;*/
      background-color: #D5D8DC;
    }

    .row {
      content: "";
      display: table;
      clear: both;
    }

    fieldset {
      /*position: relative;*/
      width: 700px;
      margin-left: 25px;
      border-radius: 5px;
      border-color: #154360;
      padding: 10px;
      padding-right: 30px;
      font-size: 16px
    }

    legend {
      color: #154360;
      font-size: 16px;
      padding-left: 10px;
      padding-bottom: 15px;
      padding-top: 24px;
    }


    #buttonid {
      text-align: right
    }



    .column1 {
      float: left;
      width: 10/35;
      padding: 10px;
      height: 800px;
      margin-bottom: 30px;
    }


    .ohButtons {
      margin-left: 26px;
    }

    .welcome {
      font-size: 27px;
      font-family: ;
      color: white;
    }

    .uid {

      font-family: 20px;
    }

    .hr1 {
      margin-top: 10px;
    }

    .logoutbutton {
      margin: 10px;
      width: 195px;
      height: 40px;
      font-size: 15px;
      color: white;
      margin-left: 10px;
      border-radius: 7px;
      border-color: #0074D9;
      background-color: #0074D9;
    }

    .reset {

      width: 195px;
      height: 40px;
      font-size: 15px;
      color: white;

      border-radius: 7px;
      border-color: #0074D9;
      background-color: #0074D9;
    }

    .logoutbutton:hover {
      cursor: pointer;
      background-color: #0074D9;
    }

    .edit {
      width: 100px;
      height: 20px;
      font-size: 11.5px;
      color: white;
      border-radius: 7px;
      border-color: #0074D9;
      background-color: #0074D9;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
      color: #dddddd;

    }

    /*tr:nth-child(even) {
  background-color: #dddddd;
}*/
    * {
      box-sizing: border-box;
    }

    .row {
      display: flex;
    }

    /* Create three equal columns that sits next to each other */
    .column9 {
      flex: 70%;
      padding: px;
      float: left;
    }

    .column10 {
      flex: 20%;
      padding: 25px;
      float: right;
    }

    .header11 {
      margin: auto;
      height: 95px;
      background-color: #154360;
      padding-right: 10px;
      padding-bottom: 20px
    }

    .column5 {
      float: left;
      width: 50%;
      padding: 10px;
      height: 58px;
      color: white;
    }

    .card3 {
      box-shadow: 1px 2px 3px 1px rgba(0, 0, 0, 0.4);
      width: 750px;
      height: auto;
      margin: 8px 10px 20px 50px;
      border-radius: 1%;
      /*font-family:time new roman;*/
      /*background-color: white;*/
      font-size: 14.5px;
      background-color: white;
    }

    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
      padding-top: 60px;
      text-align: center;
    }

    .close {
      position: fixed;
      right: 25px;
      width: 10%;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <?php
  include("header.php");

  ?>

  <!--------------------------------------------------------user profile--------------------------------------->
  <?php if ($customer_id > 0) { ?>


  <?php
  $select = mysqli_query($conn, "SELECT * FROM customer WHERE c_id = '$customer_id'") or die('query failed');
  if (mysqli_num_rows($select) > 0) {
    $fetch = mysqli_fetch_assoc($select);
  }
  ?>
  <div class="row">

    <div class="column">
      <p3 style="font-size:33px;color:white;"><i class="far fa-address-card"
          style="color: white;padding-top:13px"></i><b> User Profile</b></p3>
      <h3 style="color:white">User Id :
        <?php echo $fetch['c_id']; ?>
      </h3>
      <Center><img src=" <?php echo $fetch['image']; ?>" style="width:170px;height:auto;border-radius:50%">
      </center>
      <?php if ($fetch['image'] == NULL) { ?>
      <Center><img src="../images/how2.png" style="width:100px;height:auto"></center>
      <?php } ?>

      <a href="logout.php"><button class="logoutbutton">Logout</button></a>
      <a href="logout.php"><button class="reset">Reset Password</button></a>
      <br>
      <hr class="hr1">

      <?php
      $result = mysqli_query($conn, "SELECT * FROM orders  WHERE customer_id='$customer_id' order by id desc LIMIT 5") or die('query failed');
      ?>
      <p3 style="font-size:20px;color:white;"><i class="fas fa-caret-down	"
          style="color: white;padding-top:13px"></i><b> Order History</b></p3><br><br>
      <table style="width:100%">
        <tr style="color:#0074D9">
          <th>Date</th>
          <th>Order Id</th>
          <th>Total Price</th>
        </tr>
        <?php if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><i class='far fa-arrow-alt-circle-right' style='font-size:14px;color:white'></i>
            <?php echo " " . $row["date"]; ?>
            </th>
          <td>
            <?php echo "OD0" . $row["id"]; ?>
            </th>
          <td>
            <?php echo "Rs." . $row["total"] . ".00"; ?>
            </th>
            <?php }
        }
        ?>
      </table><br>


      <button onclick="document.getElementById('id01').style.display='block'"
        style="float:right;border-radius:20%;border-color:white"><i class='fas fa-angle-double-right'
          style='font-size:15px;'></i></button>

      <div id="id01" class="modal">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
        </div>

        <center>
          <div class="card3" style="background-color:"><br>
            <?php $query1 = "SELECT * FROM orders WHERE customer_id='$customer_id' order by id desc";
            $result1 = mysqli_query($conn, $query1);
            if (mysqli_num_rows($result1) > 0) { ?>
            <center>
              <table style="width:60% ;color:black">
                <tr>
                  <th style="color:black;border: 1px solid black;">Order Id</th>
                  <th style="color:black;border: 1px solid black;">Customer Id</th>
                  <th style="color:black;border: 1px solid black;">Total Price</th>
                  <th style="color:black;border: 1px solid black;">Date</th>
                </tr>
                <?PHP while ($row = mysqli_fetch_array($result1)) {
                  ?>
                <tr>
                  <td style="color:black;border: 1px solid black;">
                    <?php echo $row['id']; ?>
                  </td>
                  <td style="color:black;border: 1px solid black;">
                    <?php echo $row['customer_id']; ?>
                  </td>
                  <td style="color:black;border: 1px solid black;">
                    <?php echo "Rs." . $row['total']; ?>
                  </td>
                  <td style="color:black;border: 1px solid black;">
                    <?php echo $row['date']; ?>
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
        </center>
      </div>

    </div>

    <div class="column4">
      <div class="header11">
        <div class="row">

          <div class="column5">

            <i>
              <h1 style="color:white;float:left">Welcome&nbsp;&nbsp;</h1>
            </i>
            <p style="font-size:19px;color:white;padding-top:12px">
              <?php echo $fetch['c_firstname'] . " " . $fetch['c_lastname'] ?>
            </p>
          </div>

          <div class="column5">
            <p style="padding-top:22px"><a href="update.php"><button class="edit"
                  style="text-align:center;float:right;">Edit_</button></a></p>
          </div>
        </div><br><br><br>
        <form action="" method="POST">
          <div class="card3">
            <fieldset>
              <legend><i class='fas fa-user-tie' style='font-size:20px'></i><b> Name & Email</b></legend>
              <B style="color:#154360">First Name :</b>
              <?php echo " " . $fetch['c_firstname']; ?> <br /><br />
              <B style="color:#154360">Last Name :</b>
              <?php echo " " . $fetch['c_lastname']; ?><br /><br />
              <B style="color:#154360">Email :</b>
              <?php echo " " . $fetch['c_email'] ?>
            </fieldset><br>
          </div>
          <div class="card3">
            <fieldset>
              <legend><i class='fas fa-home' style='font-size:20px'></i><b> Address</b></legend>
              <B style="color:#154360">Address Line 1 :</b>
              <?php echo $fetch['c_address1']; ?> <br /><br />
              <B style="color:#154360">Address Line 2 :</b>
              <?php echo $fetch['c_address2']; ?> <br /><br />
              <B style="color:#154360">City/Town :</b>
              <?php echo $fetch['c_city']; ?>
            </fieldset><br>
          </div>
          <div class="card3">
            <fieldset>
              <legend><i class='fas fa-phone-alt' style='font-size:20px'></i><b> Contact Number</b>
              </legend>
              <B style="color:#154360">Telephone Number :</b>
              <?php echo " " . $fetch['c_telephone']; ?>
            </fieldset><br>
          </div>
        </form>
      </div>

    </div>
  </div>

  <?php
  include("footer.php");
  ?>
</body>
<?php } ?>

<?php if ($customer_id == 0)
  echo "log again"
    ?>

</html>