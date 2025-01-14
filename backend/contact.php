<?php
	require_once 'dbconfic.php';
	function AddData($connect,$name,$email,$subject,$message){
		try {
            
		
			$sql = "INSERT INTO contact VALUES('$name','$email','$subject', '$message')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				// echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../index.php');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
        $message=$_POST['message'];
		AddData($connect,$name,$email,$subject, $message);
	}
	

	?>
