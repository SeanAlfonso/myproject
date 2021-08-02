<?php 

	include("connection.php");
	include ("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		
		$package = $_POST['package'];
		$qty = $_POST['qty'];
		$user_id = $_POST['user_id'];
		if(!empty($qty) && !empty($package) && !empty($user_id))
		{ 
			//save to database
			
			$query = "insert into order_list (qty , user_id, package) values ('$qty', '$user_id', '$package');";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
</head>
<body background = "Images/bg.png">

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px; 
	}

	</style>
<br><br><br><br><br><br><br><br><br>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Order - Package 3 </div>
			<input id="text" type="text" value = ""name ="package" placeholder= "Package Name"><br><br>
			<input id="text" type="text" value = ""name ="user_id" placeholder= "User ID"><br><br>
			<input id="text" type="text" value = ""name ="qty" placeholder= "Quantity"><br><br>

			<a href="index.php"><input id="button" type="submit" value="Buy"></a><br><br>

			<br><br>
		</form>
	</div>
</body>
</html>