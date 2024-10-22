<?php

include_once 'inc.dbh.php';	

session_start();

if (isset($_POST['Submit'])) {
	
	$email    = mysqli_real_escape_string($conn, $_POST['email']); 
	$password = mysqli_real_escape_string($conn, $_POST['password']);  

	$sql         = "SELECT * FROM aseze_users WHERE email = '$email'";
	$result      = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result); 
	if ($resultCheck < 1) {
		header("Location: ../login?login=error");
		exit();
	}else{
		if ($row = mysqli_fetch_assoc($result)) {
            
            $enc = $row['password'];
            
		    //dehashing password

			if (password_verify($password, $row['password']) == false) {
				header("Location: ../login?login=error2");
				exit();
			}elseif(password_verify($password, $row['password']) == true) {
				//login user here
				$_SESSION['id']     = $row['id'];
				$_SESSION['first']  = $row['first_name'];
				$_SESSION['last']   = $row['last_name'];
				$_SESSION['email']  = $row['email'];
				$_SESSION['role']   = $row['role'];
				
                $iddd     = $_SESSION['id'];
				$emaillll = $_SESSION['email'];

				header("Location: ../profile?enc=".$enc."");
			    exit();
			}
		}
    }
}





