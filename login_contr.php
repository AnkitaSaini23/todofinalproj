<?php
require('db_connection.php');
require('db.php');
  $user_emailid=filter_input(INPUT_POST, 'user_emailid');
    $password=filter_input(INPUT_POST, 'password');

      $result  = fetchUserEmail($user_emailid);

        if($result == null || count($result) == 0){
	    $login_error = "Email ID does not exist. Please try with a valid Email ID";
	        include 'index.php';
		  }else if($result['password'] != $password){
		      $login_error = "Incorrect password entered";
		          include 'index.php';
			    }else{
			        include 'list.php';
				  }
				  ?>

