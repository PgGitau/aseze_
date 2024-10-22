<?php
        
    require_once 'includes/inc.dbh.php';
    require_once 'phpqrcode/qrlib.php';
    
    $path = 'images/qrcode/';
    $qrcode = $path.time().".png";
    $qrimage = time().".png";
    
    if(isset($_REQUEST['sbt-btn'])){
        
    $qrtext = $_REQUEST['qrtext'];

    $ins = "INSERT INTO `aseze_qr_code` (`qrtext`, `qrimage`) VALUES ('$qrtext', '$qrimage')";          
    $query = mysqli_query($conn, $ins);
    
    move_uploaded_file($qrimage, $path);
    
	QRcode :: png($qrtext, $qrcode, 'H', 4, 4);

  header("Location: https://aseze.africa/qr.php"); 
    exit();
}


?>









