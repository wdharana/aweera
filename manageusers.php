<?php session_start(); ?>
<?php require_once('classes/connection.php') ?>
<?php require_once('classes/functions.php'); ?>

<?php 
	$user_list = '';

	//getting list of users
	$query = "SELECT * FROM user WHERE is_deleted=0 ORDER BY type";
	$users = mysqli_query($connection,$query);

	verify_query($users);

	while($user = mysqli_fetch_assoc($users)){
		$user_list.= "<tr>";
		$user_list.= "<td>{$user['id']}</td>";
		$user_list.= "<td>{$user['first_name']}</td>";
		$user_list.= "<td>{$user['last_name']}</td>";
		$user_list.= "<td>{$user['type']}</td>";
		$user_list.= "<td>{$user['last_login']}</td>";
		$user_list.= "<td><a href=\"modify-user.php?user_id={$user['id']}\">Edit</a></td>";
		$user_list.= "<td><a href=\"delete-user.php?user_id={$user['id']}\">Delete</a></td>";
		$user_list.= "</tr>";
	}
 ?>

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
    <?php echo $user_list; ?>
  </tbody>
</table>