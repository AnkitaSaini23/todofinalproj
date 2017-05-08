<?php include 'todoheader.php'; ?>
<form action = "register_controller.php" method="post">
<strong>First name</strong><br>
<input type = "text" name = "first_name" placeholder="Enter a First Name"><br><br>
<strong>Last name</strong><br>
<input type = "text" name = "last_name" placeholder="Enter Last Name"><br><br>
<strong>Email</strong><br>
<input type = "email" name = "user_emailid" placeholder="Enter a valid Email ID"><br><br>
<strong>Password</strong><br>
<input type = "password" name = "password" placeholder="Enter password"><br><br>
<strong>Phone Number(xxx-xxx-xxxx)</strong><br>
<input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="Enter pho no." name = "phone_no"><br><br>
<strong>Birthday</strong><br>
<input type="Date" name = "birthday"><br><br>
<strong>Gender</strong><br>
<input type="radio" name="gender" value="M" checked> Male
<input type="radio" name="gender" value="F"> Female
<br><br>
<input type = "submit" value="Submit">
</form>
<br><br>
<?php
if(isset($login_error)){
echo $login_error;
}
?>
<?php include 'footer.php'; ?>

