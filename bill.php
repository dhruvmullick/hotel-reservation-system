<?php
  session_start();
?>
<html>
<head>
  <title>Bill Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
<body>

  <?php
    include "connection.php";
    $type=$_SESSION['type'];

    $qq=mysqli_query($con,"select `inrsin` from tariff where `type`='$type'");

    while($res = mysqli_fetch_assoc($qq)){
      $_SESSION['price'] = $res['inrsin'];
    }
  ?>

  <div id = "heading">
    <h1>Bill</h1>
  </div>



  <div id = "heading">

    <h2>Type of Rooms : <?php echo $_SESSION['type']; ?> </h2>
    <h2>Cost per Room : <?php echo $_SESSION['price']; ?> </h2>
    <h2>Number of Rooms : <?php echo $_SESSION['norm']; ?> </h2>
    <h2>Number of Days : <?php echo $_SESSION['datediff']; ?> </h2>
    <br><br>
    <h2>Thank you for coming, <strong><?php echo $_SESSION['username']?></strong></h2>
    <h2>Following rooms have been booked.Have a nice day :)</h2>


    <?php
      include "connection.php";
      $rid=$_SESSION['rid'];
      $qq=mysqli_query($con,"select `room_number` from maprr where `r_id`= '$rid' ");


      while($res = mysqli_fetch_assoc($qq)){
      echo "<h2>R-";
      echo $res['room_number'];
      echo "</h2>";
      }
    ?>


    <h1>Your bill amount is <?php echo $_SESSION['price']?> x <?php echo $_SESSION['norm'] ?> x <?php echo $_SESSION['datediff'] ?> = <?php echo $_SESSION['price']*$_SESSION['norm']*$_SESSION['datediff'] ?></h1>
  <div>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
