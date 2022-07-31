<?php
include("../model/db.php");
if(isset($_POST["submit"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $designation=$_POST["designation"]; 
    $email=$_POST["email"];
    $checked="";
        
        foreach($_POST['language'] as $selected){
            $checked =  $selected.",".$checked;
            }
    $password=$_POST["pass"];
    $file=$_POST["file"];
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser($fname,$lname,$age,$designation,$checked,$email,$password,$file,"employee",$myconn);
}
?>