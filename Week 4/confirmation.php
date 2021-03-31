<?php session_start() ?>
<?php
//$price = $_SESSION['txtprice'];
$qty = $_SESSION['quantityValue'];
$size = $_SESSION['size'];
 
echo "<h2> Your order qty is " . $qty  . "</h2></br>";
echo "<h2> and the selected colour is $_POST[selcolour].</h2></br>";
echo "<h2> and the selected size is $size.</h2></br>";

switch ($size)
{
   case $size == 'Small'; $price=15.75; break; 
   case $size == 'Medium'; $price=16.75; break;
   case $size == 'Large'; $price=17.75; break;
   case $size == 'Extra Large'; $price=18.75; break;
   default: $price=15.75;
}
   

   $total = $qty * $price;
   echo "<h2> Your order total is £" . $total . " </h2>";
// print_r($_SESSION);
?>