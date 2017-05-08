<?php include 'todoheader.php'; ?>
<br>
<br>

<form action = "login_contr.php" method="post">
    <strong>Email</strong><br>
        <input type = "email" name = "user_emailid"><br><br>
	    <strong>Password</strong><br>
	        <input type = "password" name = "password"><br><br>
		    <input style="align:center" type = "submit" value="Login">
		    </form>
		    <br><br>
		    <p>New User ? <a href="register.php">New User? Register here</a></p>
		    <br><br>
   <?php
    if(isset($login_error)){echo $login_error;
		      }
		      ?>
<?php include 'todofooter.php'; ?>

