<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";
	$link = mysqli_connect("127.0.0.1", "root", "", "db1_21800490");
	// Connect to server and select database
	
	// Execute sql statement		
	$result = mysqli_query($link, $sql);
	/* if (!$result){
		echo mysqli_error();
	} else {
		echo "Successfully inserted";
	} */
	$result = "SELECT * FROM test";
	
	// Execute sql statement
	$query = mysqli_query($link, $result);
	while ($row = mysqli_fetch_assoc($query))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}

	
?>