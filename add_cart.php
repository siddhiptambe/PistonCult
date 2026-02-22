<?php
include 'backend/conn.php';
$id=isset($_GET['id'])? $_GET['id'] : null;
if(isset($_GET['id1']))
{
	$id1=$_GET['id1'];
	$table = $_GET['id2']; 
	$col = $_GET['id3'];
	$id=$_COOKIE["id"];
	
	$item = "SELECT `NAME`, `IMAGE`, `Price` FROM shop WHERE $col = $id1";

	$result1 = mysqli_query($conn, $item);

	if ($result1 && mysqli_num_rows($result1) > 0) {
    	// Fetch the row
    	$row1 = mysqli_fetch_assoc($result1);

    	// Prepare the insert statement for the destination table
    	$NAME1 = mysqli_real_escape_string($conn, $row1['NAME']);
    	$IMAGE1 = mysqli_real_escape_string($conn, $row1['IMAGE']);
    	$Price1 = mysqli_real_escape_string($conn, $row1['Price']);
    
    	$ins1 = "INSERT INTO cart (`ID_CART`, `NAME`, `IMAGE`, `Price`) 
            VALUES ('$id', '$NAME1', '$IMAGE1', '$Price1')";
    
   		if (mysqli_query($conn, $ins1)) {
?>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Auto Submit Form</title>
				<script>
					window.onload = function() {
						// Automatically submit the form after the page loads
						document.getElementById("autoSubmitForm").submit();
					};
				</script>
			</head>
			<body>
				<form id="autoSubmitForm" action="shop.php" method="POST" style="display:none;">
					<input type="hidden" name="<?php echo $table?>" value="lambo">
				</form>
			</body>
			</html>
<?php
   		} 
   		else {
   		
   		}
	} 
	else {}
} 

?>