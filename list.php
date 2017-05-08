<?php
require_once('db.php');
$completed_todo_list = fetchtodolist($user['id'],"Completed");
$incomplete_todo_list = fetchtodolist($user['id'],"Pending");
?>
<?php include 'todoheader.php'; ?>
<?php echo $user['first_name']." ".$user['last_name'];?>
<br>
<br>
<a style = "padding:12px" href="index.php">logout</a>

<br><br>
<h4>To-do items</h3>

<table>
<?php foreach($incomplete_todo_list as $todo) : ?>
<tr>
<td>
<form action="list_controller.php" method="post">
<input type="text" name ="todo_item" value = "<?php echo $todo['todo_item'];?>">
<input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
<input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
<input name="actionBtn" type="submit" value="edit">
<input name="actionBtn" type="submit" value="delete">
<input name="actionBtn" type="submit" value="completed">
</form>
</td>
</tr>
</tr>
<?php endforeach; ?>
</table>

<br><br>
<h4>Completed To-do items</h3>
<table>
<?php foreach($completed_todo_list as $todo) : ?>
<tr>
<td>
<form action="list_controller.php" method="post">
<input type="text" name ="todo_item" value = "<?php echo $todo['todo_item'];?>">
<input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
<input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
<input name="actionBtn" type="submit" value="edit">
<input name="actionBtn" type="submit" value="delete">
</form>
</td>
</tr>
</tr>
<?php endforeach; ?>
</table>
<br><br><br>
<form action="list_controller.php" method="post">
<label>Todo Item</label>
<input type="text" name="todo_item">
<input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
<input name="actionBtn" type="submit" value="add">
</form>
<?php include 'footer.php'; ?>

