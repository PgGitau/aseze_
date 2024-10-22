 <?php

include_once 'inc.dbh.php';	

if (isset($_POST['Submit'])) {

	$first     = mysqli_real_escape_string($conn, $_POST['first']); 
	$last      = mysqli_real_escape_string($conn, $_POST['last']);
	$email     = mysqli_real_escape_string($conn, $_POST['email']);
	$phone     = mysqli_real_escape_string($conn, $_POST['phone']);
	$role      = mysqli_real_escape_string($conn, $_POST['role']);
	$password  = mysqli_real_escape_string($conn, $_POST['password']);
	$repeat    = mysqli_real_escape_string($conn, $_POST['password_repeat']);

	//Error handlers
	//Check for empty fields
	if ($repeat != $password) {
		header("Location: ../create?signup=match");
		exit();
		
	}else{

		//Hashing password
		$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO aseze_users (first_name, last_name, email, phone, role, password) VALUES ('$first', '$last', '$email', '$phone', '$role', '$hashedPwd')";
		mysqli_query($conn, $sql); 	

        header("Location: ../create?signup=scss");
	    exit();         
	
    }
}













