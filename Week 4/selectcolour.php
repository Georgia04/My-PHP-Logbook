<html>
  <head><title>Select colour page</title></head>
    <body>
      <?php session_start() ?>
      <?php 
      $qty = $_SESSION['selqty'];
      $_SESSION['size'] = $_POST['size'];
     print_r($_SESSION);
    ?>
      <form action="confirmation.php"  method="post">
	Select the colour for the <?php echo $qty; ?> widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	