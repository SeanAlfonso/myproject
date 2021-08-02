<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	
	$user_data = check_login($con);
$title = "Home";
$content = '<img src="Images/p1.jpg" class="imgLeft" />
<div align = "center">
<h3>Package 1</h3>

<p>
<h4>Smart system + Aquarium + Solar power system <br><br> Price: 28,000.00 PHP</h4>
</p>
<p>
<form action="order.php" method="post">
<a href = "order.php">Buy</a><br><br><br><br><br><br><br>
</p>

<img src="Images/p2.jpg" class="imgLeft1"/>
<h3>Package 2</h3>
<p>
    <h4>Smart system + Aquarium  <br><br>Price: 17,000.00 PHP</h4>
	
</p>
<p>

<a href = "order2.php">Buy</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</p>

<img src="Images/p3.jpg" class="imgLeft" />
<h3>Package 3</h3>
<p>
   <h4>Smart system only <br><br>Price: 10,000.00 PHP</h4>

</p>
<p>
<a href = "order3.php">Buy</a>
</p></div>';


include 'body.php';
?>

