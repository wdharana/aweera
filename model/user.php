<?php require_once('../model/database.php') ?>
<?php 
	class User{

		public function loadUsers(){
			$db = new Database();
		    $connection = $db->connect();
		    $user_list ='';
			//getting list of users
			$query = "SELECT * FROM user WHERE is_deleted=0 ORDER BY type";
			$users = $db->executeQuery($query);

			$db->verify_query($users);

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
			return $user_list;		
		}

		public function getUserList(){
			return $user_list;
		}
	}
	
 ?>