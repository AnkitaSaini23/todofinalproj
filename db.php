<?php
require_once('database_connection.php');

function addTodoItem($user_id,$todo_text){
global $db;
$query = 'insert into todos(user_id,todo_item) values (:userid,:todo_text)';
$statement = $db->prepare($query);
$statement->bindValue(':userid',$user_id);
$statement->bindValue(':todo_text',$todo_text);
$statement->execute();
$statement->closeCursor();
}
function getTodoItemsForGivenUser($user_id, $status){
global $db;
$queryname = 'SELECT * FROM todos WHERE user_id = :user_id AND status = :status order by createdtime';
$statement = $db->prepare($queryname);
$statement->bindvalue(':user_id',$user_id);
$statement->bindvalue(':status',$status);
$statement->execute();
$todo_list = $statement->fetchAll();
$statement->closeCursor();
return $todo_list;
}
function createUser($username,$first_name,$last_name,$password,$phone_no,$birthday,$gender){
global $db;
$query = 'select * from users where username = :username ';
$statement = $db->prepare($query);
$statement->bindValue(':username',$username);
$statement->execute();
$result= $statement->fetchAll();
$statement->closeCursor();
$count = $statement->rowCount();
if($count > 0)
{
return true;
}
else{
$query = 'INSERT INTO users
( username ,password, first_name, last_name, phone_no,birthday,gender)
VALUES
(:username,:password, :first_name, :last_name, :phone_no, :birthday, :gender)';
 $statement = $db->prepare($query);
 $statement->bindValue(':username', $username);
 $statement->bindValue(':password', $password);
 $statement->bindValue(':first_name', $first_name);
 $statement->bindValue(':last_name', $last_name);
 $statement->bindValue(':phone_no', $phone_no);
 $statement->bindValue(':birthday', $birthday);
 $statement->bindValue(':gender', $gender);
 $statement->execute();
 $statement->closeCursor();
 return false;
 }
 }
 function isUserValid($username,$password){
 global $db;
 $query = 'select * from users where username = :username and 
 password = :pass';
 $statement = $db->prepare($query);
 $statement->bindValue(':username',$username);
 $statement->bindValue(':pass',$password);
 $statement->execute();
 $result= $statement->fetchAll();
 $statement->closeCursor();
 $count = $statement->rowCount();
 if($count == 1){
 setcookie('login',$username);
 setcookie('my_id',$result[0]['id']);
 setcookie('islogged',true);
 return true;
 }
 else{
 unset($_COOKIE['login']);
 setcookie('login',false);
 setcookie('islogged',false);
 setcookie('id',false);
 return false;
 }
 }
 ?>

