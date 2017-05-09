<?php

require_once('db_connection.php');

function fetchUserEmail($username){
global $db;
$queryname = 'select * from  users WHERE username = :username';
$statement = $db->prepare($queryname);
$statement->bindvalue(':username',$username);
$statement->execute();
$result = $statement->fetch();
$statement->closeCursor();
return $result;
}

function fetchUserId($user_id){
global $db;
$queryname = 'SELECT * FROM users WHERE id = :user_id';
$statement = $db->prepare($queryname);
$statement->bindvalue(':user_id',$user_id);
$statement->execute();
$result = $statement->fetch();
$statement->closeCursor();
return $result;
}

function
createNewUser($username,$first_name,$last_name,$password,$phone_no,$birthday,$gender){
global $db;
$query = 'INSERT INTO users
(username ,password, first_name, last_name, phone_no,birthday,gender)
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
}

function fetchtodolist($user_id, $item_status){
global $db;
$queryname = 'SELECT * FROM todos WHERE user_id = :user_id AND item_status = :item_status';
$statement = $db->prepare($queryname);
$statement->bindvalue(':user_id',$user_id);
$statement->bindvalue(':item_status',$item_status);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();
return $result;
}

function addtodolist($user_id, $todo_item){
global $db;
$query = 'INSERT INTO todos (user_id, todo_item) VALUES (:user_id, :todo_item)';
$statement = $db->prepare($query);
$statement->bindValue(':user_id', $user_id);
$statement->bindValue(':todo_item', $todo_item);
$statement->execute();
$statement->closeCursor();
}
function updateToDoItem($id,$todo_item){
global $db;
$query = 'UPDATE todos SET todo_item = :todo_item WHERE id = :id';
$statement = $db->prepare($query);
$statement->bindValue(':id', $id);
$statement->bindValue(':todo_item', $todo_item);
$statement->execute();
$statement->closeCursor();
}

function deleteTodo($todo_id){
global $db;
$query = 'DELETE FROM todos WHERE id = :todo_id';
$statement = $db->prepare($query);
$statement->bindValue(':todo_id', $todo_id);
$statement->execute();
$statement->closeCursor();
}

function updateToDoStatus($todo_id, $status){
global $db;
$query = 'UPDATE todos SET item_status = :status WHERE id = :todo_id';
$statement = $db->prepare($query);
$statement->bindValue(':status', $status);
$statement->bindValue(':todo_id', $todo_id);
$statement->execute();
$statement->closeCursor();
  }
    ?>


