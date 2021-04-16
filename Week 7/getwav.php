<?php

  header("Content-type: audio/wav");

  $link = mysqli_connect("localhost", "root","", "db1_21800490");
  if (!$link) 
  {
  die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT audio FROM monster WHERE id='" . $_GET[id] ."'";
	
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>