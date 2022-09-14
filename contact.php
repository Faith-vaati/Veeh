<?php
include "includes/header.php";
include "includes/menu.php";
?>
Welcome to Dashboard



<br><br>
<form action="contact.php?pg=cnt" method="post" enctype="multipart/form-data">

<table width="80%" border="0" cellspacing="0">
  <tr><td>Full name:</td><td><input type="text" name="fname" placeholder="Type First Input" required></td></tr>
  <tr><td>Date of birth:</td><td><input type="date" name="dob" required></td></tr>
  <tr><td>Gender:</td><td><input type="radio" name="gender" value="male">Male | <input type="radio" name="gender" value="female">Female</td></tr>
     <tr><td>Address:</td><td><textarea name="addr"></textarea></td></tr>
     <tr><td>Email:</td><td><input type="email" name="email" required></td></tr>
     <tr><td>Mobile no.:</td><td><input type="text" name="mobno"></td></tr>
     <tr><td>Address:</td><td><textarea name="addr"></textarea></td></tr>
     <tr><td>Profile photo:</td><td><input type="file" name="photo"?></td></tr>
     <tr><td colspan="2"><input type ="Send" name="sub" value="Register"></td></tr>

</table>

</form>
<?php
include "includes/footer.php";
?>

