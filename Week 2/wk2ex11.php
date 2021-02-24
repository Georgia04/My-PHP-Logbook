<?php
$mymarks["450"] = 60;
$mymarks["451"] = 75;
$mymarks["452"] = 80;
$mymarks["453"] = 65;
$mymarks["454"] = 50;
$mymarks["455"] = 69;
$mymarks["456"] = 76;

$total = 0;
/*for($count=0; $count<6; $count++) {
    echo "$count $mymarks[$count]";
}*/
while(list($index,$value) = each($mymarks)){
    echo "My module code is $index and the mark is $value <br/>";
    $total = $total + $mymarks[$index];
    $average = $total / 6;

}
//$total = $total + $mymarks[$index];
//$average = $total / 6;
echo "My average mark is $average";
?>
