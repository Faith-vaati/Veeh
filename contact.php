<?php
include "includes/header.php";
?>
Welcome to Dashboard



<br><br>
<form action="add_member.php?pg=mem" method="post" enctype="multipart/form-data">

<table width="80%" border="0" cellspacing"0">
  <tr><td>Full name:</td><td><input type="text" name="fname" placeholder="Type First Input" required></td></tr>
  <tr><td>Date of birth:</td><td><input type="date" name="dob" required></td></tr>
  <tr><td>Gender:</td><td><input type="radio" name="gender" value="male">Male | <input type="radio" name="gender" value="female">Female</td></tr>
     <tr><td>Address:</td><td><textarea name="addr"></textarea></td></tr>
     <tr><td>Email:</td><td><input type="email" name="email" required></td></tr>
     <tr><td>Mobile no.:</td><td><input type="text" name="mobno"></td></tr>
     <tr><td>Profile photo:</td><td><input type="file" name="photo"?</td></tr>
      <tr><td>Username:</td><td><input type="text" name="user" required?</td></tr>
     <tr><td>Password:</td><td><input type="password" name="pass"></td></tr>
     <tr><td>Confirm password:</td><td><input type="password" name="conpass"></td></tr>
     <tr><td colspan="2"><input type ="submit" name="sub" value="Register"></td></tr>

</table>

</form>
<?php
include "includes/footer.php";
?>

