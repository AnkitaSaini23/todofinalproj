<?php
 $dsn = 'mysql:host=sql1.njit.edu;dbname=as3323';
  $username = 'as3323';
   $password = 'JBduf7y8';
    try{
       $db = new PDO($dsn,$username,$password);
        }catch (PDOException $e){
	   $error_message = $e->getMessage();
	      echo $error_message;
	         exit();
		  }
		  ?>
		  
