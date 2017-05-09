<?php



$completed_list = fetchtodolist($result['user_id'],"Completed");
$incomplete_list = fetchtodolist($result['id'],"Pending");
?>
<?php include 'todoheader.php'; ?>
<?php echo $result['first_name']." ".$result['last_name'];?>
<br>
<br>
<a style = "padding:12px" href="index.php">logout</a>

<br><br>
<h4>To-do items</h3>

<table>
<?php foreach($incomplete_list as $todo) : ?>
<tr>
<td>
<form action="list_controller.php" method="post">
<input type="text" name ="todo_item" value = "<?php echo
$todo['todo_item'];?>">
<input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
<input type="hidden" name="user_id" value="<?php echo $result['id']; ?>">
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
<?php foreach($completed_list as $todo) : ?>
<tr>
<td>
<form action="list_controller.php" method="post">
<input type="text" name ="todo_item" value = "<?php echo
$todo['todo_item'];?>">
<input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
<input type="hidden" name="user_id" value="<?php echo $result['id']; ?>">
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
<input type="hidden" name="user_id" value="<?php echo $result['id']; ?>">
<input name="actionBtn" type="submit" value="add">
</form>
<?php include 'footer.php'; ?>


