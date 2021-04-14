<?php include("class_lib.php"); ?>
<?php 
    $georgia = new person();
    $costa = new person();

    $georgia->set_name("Georgia Gkegka <br/>");
    $costa->set_name("Costa Mike");

    echo "Georgia's full name : " . $georgia->get_name(); 
    echo "Costa's full name : " . $costa->get_name();
?>