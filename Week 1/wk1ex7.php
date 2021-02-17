<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$taxrate22 = 0.78;
	$gross = $hourlyrate * $hoursperweek;
	$net = $gross * $taxrate22;
	echo $gross;
	//echo $net;
?>
</body>
</html>
