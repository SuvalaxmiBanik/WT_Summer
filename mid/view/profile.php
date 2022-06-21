<?php
session_start();
?>
<html>
    <form>
    <body>
       
        <?php
         session_start();
         if(empty($_SESSION["uname"]))
        echo "hii ".$_SESSION["uname"];
 
        <br>
        <a href="logout.php">Logout</a>
        ?>
        
       
       
</form>
</body>
</html>