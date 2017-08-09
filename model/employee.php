<?php require_once('../model/database.php') ?>

<?php  
	
	class Employee{


		function checkErrors(){
			$errors = array();

			if (isset($_POST['submit'])){

				// checking required fields
				
				if (empty($_POST['first_name'])){
					$errors[] = 'First Name is required';
				}
			}
			return $errors;		
		}



	}


 ?>