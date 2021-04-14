<?php	
	session_start();
	
;    $link = mysqli_connect("localhost", "root", "", "db1_21800490");
	// Connect to server and select database
	$_SESSION['nameID'] = $_GET[id];

	$sql = "SELECT * FROM test WHERE name = '$_GET[id]' ";
	// Execute query
    $result = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($result);
    //print_r($result);
	//print_r($row);
?>
<html>
<body>
<form action="wk6ex2save.php" method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row["name"] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row["phone_number"] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row["email"] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>

<form action="wk6ex2delete.php" method="post">
	<a href action="wk6ex2delete.php" onclick="return confirm('Are you sure you want to delete this record?');"> Delete </a>
</form>

</body>
</html>