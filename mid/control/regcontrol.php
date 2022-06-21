<?php

if(isset($_POST["submit"])){  
$flag=1;
$nameErr = $emailErr = $genderErr = $dobErr = $addressErr= $id = $name = $email = $dob = $gender = $address = "";
$username = $password = "";
$userNameErr = $passErr = $confirmpassErr = $confirmpass = "";
$message = '';  
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = 'Name is required!<br>';
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      $nameErr = "Only letters white space, period & dash allowed<br>";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      $nameErr = "At least two words needed<br>";
      $flag=0;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required<br>";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format<br>";
      $email ="";
      $flag=0;
    }
  }

  if (empty($_POST["birthday"])) {
    $dobErr = "DOB is required<br>";
    $flag=0;
    } 
    else {
    $dob = test_input($_POST["birthday"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required<br>";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
 if (empty($_POST["address"])) {
    $addressErr = "Address is required<br>";
    $flag=0;
  } else {
    $address = test_input($_POST["address"]);
  }
  if (empty($_POST["username"])) {
    $userNameErr = "UserName is required<br>";
    $flag=0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $userNameErr = "Only alpha numeric characters, period, dash or underscore allowed<br>";
      $username ="";
      $flag=0;
    }
    else if (strlen($username)<2) {
      $userNameErr = "At least two charecters needed<br>";
      $username ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["Password"])) {
  $passErr = "Password is required<br>";
    $flag=0;
  } else {
    $password = test_input($_POST["Password"]);
    if (strlen($password)<5) {
      $passErr = "Password must be 5 charecters<br>";
      $password ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $passErr = "Password must contain at least one of the special characters (@, #, $,%)<br>";
      $password ="";
      $flag=0;
    }
  }
  if (empty($_POST["confirmpass"])) {
    $confirmpassErr = "Retype The Current Password<br>";
    $flag=0;
  } else {
    $confirmpass = test_input($_POST["confirmpass"]);
    if (strcmp($password, $confirmpass)==1) {
      $confirmpassErr = "Password & Retyped Password Dosen't Match<br>";
      $confirmpass ="";
      $flag=0;
       }
  }

  if($flag==0){
    $args = array(
    'nameErr' => $nameErr,
    'emailErr' => $emailErr,
    'userNameErr' => $userNameErr,
    'passErr' => $passErr,
    'confirmpassErr' => $confirmpassErr,
    'genderErr' => $genderErr,
    'dobErr' => $dobErr
);
      header("location:../view/reg.php?" . http_build_query($args));
   }

if($flag==1)
{
  $data['name']=$name;
  $data['email']=$email;
  $data['username']=$username;
  $data['password']=$password;
  $data['dateofbirth']=$dob;
  $data['address']=$address;

  if(isset($_POST["submit"]))  
    {
 	if(file_exists('regData.json'))
 		{
 			$current_data = file_get_contents('regData.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array(  
                 'name'               =>     $_POST['name'],
                 'email'          =>     $_POST["email"],
                 'username'          =>     $_POST["username"],
                 'password'          =>     $_POST["confirmpass"],  
                 'gender'          =>     $_POST["gender"],  
                 'dateOfBirth'     =>     $_POST["birthday"],
                 'address'     =>     $_POST["address"]   
                );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);  
            if(file_put_contents('regData.json', $final_data))  
            {  
                 $message = "Data Recorded Successfully";  
            }  
        }  
        else  
        {  
           $error = 'JSON File not exits';  
        }  
    }

}
}
}
else {
  echo "You can not access this page!!<br>";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
 ?>