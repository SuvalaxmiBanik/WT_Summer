<!DOCTYPE html>
<html>
<body>

<h1>Registration form</h1><hr>

<form action="../control/process.php" method="POST">
    <table>
<tr>
  <td><label>First Name:</label></td>
  <td><input type="text" name="fname" ></td>
</tr>
  <tr>
      <td><label>Last Name:</label></td>
      <td> <input type="text" name="lname" ></td>
    </tr>
    <tr>
      <td><label>Age:</label></td>
      <td> <input type="text" name="age" ></td>
    </tr>
  <tr>
      <td>Designation:</td>
      <td> <input type="radio" name="designation" value="junior programer">Junior Programer
      <input type="radio"  name="designation" value="senior programer" >Senior Programer
      <input type="radio"  name="designation" value="project leader">Project Lead</td>
    </tr>
  <tr>
      <td>Prefered language:</td>
          <td> <input type="checkbox" name="language1" value="java">JAVA
          <input type="checkbox" name="language2" value="php">PHP
          <input type="checkbox"  name="language3" value="c+">C++</td>
  </tr>
  <tr>
      <td>E-mail: </td>
      <td><input type="email" name="ename" ></td>
    </tr>
  <tr>
      <td>Password:</td>
      <td><input type="password" name="pass" ></td>
</tr>
  <tr>
      <td>Please choose a file </td>
         <td> <input type="file" name="file" ></td>
</tr>
  <tr>
      <td><input type="submit" name="submit" value="Submit"><input type="reset" value="Reset"></td>
    </tr>
  
</tr>
</table>
</form>
</body>
</html>