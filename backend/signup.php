<?php
	require_once 'dbconfic.php';
	function AddData($connect,$name,$email,$password){
		try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
		
			$sql = "INSERT INTO user VALUES('$name','$hashed_password')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				// echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../form.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		AddData($connect,$name,$email,$password);
	}
	

	?>
