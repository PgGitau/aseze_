<?php
    
    ob_start();
    
    include_once 'inc.dbh.php';	
    
    //require_once '../vendor/autoload.php';
    
    if(isset($_POST['submit'])){
    
        $name            = mysqli_real_escape_string($conn, $_POST['name']);
        $emails          = mysqli_real_escape_string($conn, $_POST['emails']);
        $country         = mysqli_real_escape_string($conn, $_POST['country']);
        $phone           = mysqli_real_escape_string($conn, $_POST['phone']);
        $registered      = mysqli_real_escape_string($conn, $_POST['registered']);
        $checkin         = mysqli_real_escape_string($conn, $_POST['checkin']);
        $checkout        = mysqli_real_escape_string($conn, $_POST['checkout']);
        $roomtype        = mysqli_real_escape_string($conn, $_POST['roomtype']);
        $people          = mysqli_real_escape_string($conn, $_POST['people']);
        $airporttransfer = mysqli_real_escape_string($conn, $_POST['airporttransfer']);
        $requests        = mysqli_real_escape_string($conn, $_POST['requests']);
        $year            = mysqli_real_escape_string($conn, $_POST['year']);
        
        $ins = "INSERT INTO `aseze_reservations` (`name`, `email`, `country`, `phone`, `registered`, `checkin`, `checkout`, `roomtype`, `people`, `airporttransfer`, `requests`, `year`, `status`) VALUES ('$name', '$emails', '$country', '$phone', '$registered', '$checkin', '$checkout', '$roomtype', '$people', '$airporttransfer', '$requests', '$year', 'unconfirmed')";          
        $sni = mysqli_query($conn, $ins); 	
        
        header("Location: https://aseze.africa/hotel?res=sucs"); 
        exit();
		
    }
    
?>

