<?php
switch($_POST['radcourse'])
{
  case "HNC" : echo "You have selected the HNC course";
          break;
  case  "HND" : echo "You have selected the HND course";
          break;
  case  "BSC" : echo "You have selected the BSC course";
          break;
  case  "Part Time BSC" : echo "You have selected the Part Time BSC course";
           break;
  default :echo "No course selected";              

}
?>