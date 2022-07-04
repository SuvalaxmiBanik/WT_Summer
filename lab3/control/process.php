<?php
session_start();
$fname=$lname=$age=$pass=$pl1=$pl2=$pl3=$des=$email="";
$fnameerr=$lnameerr=$ageerr=$passerr=$deserr=$plerr=$emailerr=$fileerr=$dataerr="";
$count=0;

if(isset($_POST["Submit"])){

$fname=$_POST["fname"];

if(empty($fname) || strlen($fname)<3){

$fnameerr= "->please enter a valid a name";

}
else{
    $_SESSION["name"]=$fname;
    $count++;
    $fnameerr="->your first name is ".$fname;
}

$lname=$_POST["lname"];

if(empty($lname) || strlen($lname)<3){

$lnameerr= "->please enter a valid a name";

}
else{
    $count++;
    $lnameerr="->your last name is ".$lname;
}


$age=$_POST["age"];
if(empty("$age")){

    $ageerr= "->please enter your age";

    }
    else{
        $count++;
        $ageerr="-> your age is ".$age;
    }

    $pass=$_POST["password"];

    if(empty($pass) || strlen($pass)<8){

        $passerr= "->please enter a password upto 8 letter/character";

        }
        else{
            $count++;
            $passerr="->your password is ".$pass;
        }



    if(isset($_POST["designation"])){
        $count++;
        $deserr="-> you have selected ".$_POST["designation"];
    }
    else{
        $deserr="->you have not selected any designation";
    }

    if(isset($_POST["Java"])  || isset($_POST["PHP"])   || isset($_POST["C++"])){
        $plerr="->you have selected ";
        $count++;
        if(isset($_POST["Java"])){
          $pl1=$_POST["Java"];

        }
        if(isset($_POST["PHP"])){
            $pl2=$_POST["PHP"];
          }
        if(isset($_POST["C++"])){
            $pl3=$_POST["C++"];
          }

    }
    else{
        $plerr="->you have not selected any preferred language";
    }

    $email=$_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailerr="->please enter a valid email";
}
else{
    $count++;
    $emailerr= "->your email is ".$email;
}
if ($_FILES["myfile"]["type"]=="image/jpeg" ){
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/".$fname.date("Y-m-d").".jpg")){
    $count++;
    $fileerr="->you have selected ".$_FILES["myfile"]["name"];

}
else{
    $fileerr="->please choose a jpg file under 6mb";
}
}
else{
    $fileerr="->please choose a jpg file under 6mb";
}


if($count==8){
   $formdata=array(
       'Fisrt Name        :'=>$fname,
       'Last  Name        :'=>$lname,
       'Age               :'=>$age,
       'Designation       :'=>$_POST["designation"],
       'Preferred Language:'=>$pl1." ,".$pl2.",".$pl3,
       'Email             :'=>$email,
       'Password          :'=>$pass


   );
   $existingdata=file_get_contents('../data/data.json');
  // $existingdata = file_get_contents('data.json');
   $tempJSONdata = json_decode($existingdata);
   $tempJSONdata[] =$formdata;
   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
   if(file_put_contents("../data/data.json", $jsondata)) {
    $dataerr= "Data successfully saved <br>";
}
else {
    $dataerr= "No data saved";
}

}


}

?> 