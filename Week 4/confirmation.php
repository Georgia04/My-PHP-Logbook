<?php session_start() ?>
<?php
$price = $_SESSION['txtprice'];
$qty = $_SESSION['selqty'];
$total = $qty * $price; 
switch ($_GET['size'])
{
   case "Small" : 
}
   echo "<h2> Your order qty is " . $_SESSION['selqty']  . "</h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2></br>";
   echo "<h2> Your order total is £" . $total . " </h2>";
 print_r($_SESSION);
?>
