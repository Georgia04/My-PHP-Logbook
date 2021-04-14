<?php
    // Connect and select database
    $link = mysqli_connect("localhost", "root", "", "db1_21800490");

    $id = $_GET['id'];
    if(isset($_GET['id'])){
      $id = $_GET['id'];
    }
    
    $name = $_POST["txtname"];
    $phone_number = $_POST["txttelno"];
    $email = $_POST["txtemail"];

    $sql = "UPDATE test 
    SET  phone_number='$phone_number', email='$email'
    WHERE name='$id'";
    $result = mysqli_query($link, $sql);

    if (mysqli_query($link, $sql)) {
        echo "Record has been updated successfully";
      } else {
        echo "Error update record: " . mysqli_error($link);
      }
?>