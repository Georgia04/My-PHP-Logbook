<?php	
    $link = mysqli_connect("localhost", "root", "", "db1_21800490");
	// Connect to server and select database
	$sql = "SELECT * from test";
	// Execute sql statement
	$result = mysqli_query($link, $sql);
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";  	
}
?>
</body>
</html>