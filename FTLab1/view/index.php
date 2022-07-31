<html>
    <body>
    <form action ="../control/process.php" method="POST">
<table>
  <tr> <td>First Name: </td> 
  <td><input type="Text" name="fname"></td></tr>
  <tr> <td>Last Name: </td>  
  <td><input type="Text" name="lname"></td></tr>
  <td>Age: </td>  
  <td><input type="Text" name="age"></td></tr>
  <td>Designation: </td> 
  <td><input type="radio" name="designation" value = "Junior Programmer">Junior Programmer</td>
  <td><input type="radio" name="designation" value = "Senior Programmer">Senior Programmer</td>
  <td><input type="radio" name="designation" value = "Project Leader">Project Lead</td></tr>
  <tr> <td>Preferred Language: </td>
  <td><input type="checkbox" name="language[]" value = "JAVA">JAVA</td> 
  <td><input type="checkbox" name="language[]" value = "PHP">PHP</td> 
  <td><input type="checkbox" name="language[]" value = "C++">C++</td> </tr>
  <tr> <td>E-mail: </td>
  <td><input type="email" name="email"></td> </tr>
  <tr><td>Password: </td>
  <td><input type="password" name="pass"></td> </tr>
  <tr><td>Please choose a file: </td>
  <td><input type="file" name="file"></td> </tr>
  <td><input type="submit" name="submit">
  <input type="reset" name="rs"></td> </tr>
    </body>
</html>