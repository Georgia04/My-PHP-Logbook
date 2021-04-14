<?php
    // Connect and select database
    $link = mysqli_connect("127.0.0.1", "root", "", "db1_21800490");
    $name = $_POST["txtname"];
    $phone = $_POST["txttelno"];
    $email = $_POST["txtemail"];

    $sql = "UPDATE test 
    SET  phone_number='$phone'";

    $result = mysqli_query($link, $sql);

    $sql = "UPDATE test SET email='$email'";

    $result = mysqli_query($link, $sql);

    echo "Values have been saved. </br>";
    echo "<a href='wk6ex2.php'/>Home </a>";

    mysqli_close($link);
?>