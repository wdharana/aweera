<?php 

	$data = json_decode(stripslashes($_POST['data']));
	$errors = array();

	// checking required fields
	if (empty($data[0])){
		$errors[] = 'First Name is required';
	}
	if (empty($data[1])){
		$errors[] = 'Last Name is required';
	}
	if (empty($data[2])){
		$errors[] = 'Email is required';
	}
	if (empty($data[3])){
		$errors[] = 'Phone Number is required';
	}
	if (empty($data[4])){
		$errors[] = 'Address is required';
	}
	

	if (!empty($errors)){
 		echo 'There were error(s) on your form.<br>';
 		foreach ($errors as $error) {
 			echo $error."<br>";
 		}
 	}
 ?>
