<?php
	include 'backend/conn.php';
	if(isset($_GET['id9']))
	{
		$id=$_GET['id9'];
		$del="DELETE FROM `cart` WHERE c_temp = $id ";
		$run = mysqli_query($conn,$del);
		if($run==true)
		{
            header("Location: cart.php");
		}
	}
	else
	{
		
	}
?>