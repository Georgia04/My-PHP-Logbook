<html>
    <head><title>Select size page</title></head>
    <body>
        <?php session_start() ?>
        <?php 
            $_SESSION['selqty'] = $_POST['selqty'];
            
            print_r($_SESSION);
        ?>
        <form action="selectcolour.php" method="post">
            Select size of the widgets you are ordering
            <select name="size">
                <option value="Small" value="15.75">Small £15.75</option>
                <option value="Medium" value="16.75">Medium £16.75</option>
                <option value="Large" value="17.75">Large £17.75</option>
                <option value="Extra Large" value="18.75">Extra Large £18.75</option>
            </select>
            <br/><br/>
            <input type="submit" value="Buy"/>
        </form>
    </body>
</html>