<form method='GET'  action='fff.php'>

service: <input type="text" name='doctors' />
<input type='submit' value='price?'>

</form>

<?php
$con = mysqli_connect("localhost","root","", "doctors");
	if (!$con) {
		die ("Failed");
	}
	// echo "success.";

	$a = $_GET['yyy'];

	
$sql = "SELECT * FROM kkk where service='$a' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) { 
		while($row = $result->fetch_assoc()) {  
			echo ("price:".$row["price"]."<br>"); 
		} 
	}
    else {
		echo "no such service"; 
	} 


	
	

?>