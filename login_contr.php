<?php
  require_once('db.php');
    $user_email=filter_input(INPUT_POST, 'user_emailid');
      $password=filter_input(INPUT_POST, 'password');

        $fetchuser = getUserForGivenEmail($user_emailid);

	  if($fetchuser == null || count($fetchuser) == 0){
	      $login_error = "Email ID does not exist. Please try with a valid Email ID";
	          include('index.php');
		    }else if($fetchuser['password'] != $password){
		        $login_error = "Incorrect password entered";
			    include('index.php');
			      }else{
			          include('list.php');
				  }
				  ?>

