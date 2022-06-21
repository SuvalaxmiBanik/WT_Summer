<?php
session_start();
setcookie("usercheck","visited",time()-86400);
if(isset($_COOKIE["usercheck"]))
{
    echo "you have visited us";
}
else
{
    echo"welcome to our site";
}
	
$uname = $_REQUEST['uname'];
$pass = $_REQUEST['pass'];

if($uname != null && $pass != null)
{
    header("Location:../view/profile.php");
}


?>
