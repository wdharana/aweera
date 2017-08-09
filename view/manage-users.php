<?php session_start(); ?>
<?php require_once('../model/database.php') ?>
<?php require_once('../model/user.php') ?>

<h2>Manage Users <span><a href="add-user.php">  +Add New</a></span></h2>

<table class="table table-hover">
  <thead>
    <tr>
      <th>User ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Type</th>
      <th>Last Login</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    	// create an oblject from user class
		$user= new User();
		$user_list = $user->loadUsers();
		echo $user_list; 
	?>
  </tbody>
</table>