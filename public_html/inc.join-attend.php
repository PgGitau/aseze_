<?php
    
    ob_start();
    
    include_once 'includes/inc.dbh.php';	
    
    require_once 'phpqrcode/qrlib.php';
    $path = 'images/qrcode/';
    $qrcode = $path.time().".png";
    $qrimage = time().".png";
    
    $https = 'https://aseze.africa/';
    
    require_once 'vendor/autoload.php';
    
    if(isset($_POST['submit'])){
    
        $company         = mysqli_real_escape_string($conn, $_POST['company']);
        $business        = mysqli_real_escape_string($conn, $_POST['business']);
        $business2       = mysqli_real_escape_string($conn, $_POST['business2']);
        $address         = mysqli_real_escape_string($conn, $_POST['address']);
        $website         = mysqli_real_escape_string($conn, $_POST['website']);
        $firstname       = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname        = mysqli_real_escape_string($conn, $_POST['lastname']);
        $designation     = mysqli_real_escape_string($conn, $_POST['designation']);
        $email           = mysqli_real_escape_string($conn, $_POST['email']);
        $nationality     = mysqli_real_escape_string($conn, $_POST['nationality']);
        $phone           = mysqli_real_escape_string($conn, $_POST['phone']);
        /*$file 		     = $_FILES['photo'];*/
        $passport        = mysqli_real_escape_string($conn, $_POST['passport']);
        $gender          = mysqli_real_escape_string($conn, $_POST['gender']);
        $birth           = mysqli_real_escape_string($conn, $_POST['birth']);
        $invite          = mysqli_real_escape_string($conn, $_POST['invite']);
        
        $agroprocessing  = mysqli_real_escape_string($conn, $_POST['agroprocessing']);
        $renewable       = mysqli_real_escape_string($conn, $_POST['renewable']);
        $minerals        = mysqli_real_escape_string($conn, $_POST['minerals']);
        $pharmaceuticals = mysqli_real_escape_string($conn, $_POST['pharmaceuticals']);
        $manufacturing   = mysqli_real_escape_string($conn, $_POST['manufacturing']);
        $construction    = mysqli_real_escape_string($conn, $_POST['construction']);
        $logistics       = mysqli_real_escape_string($conn, $_POST['logistics']);
        $tourism         = mysqli_real_escape_string($conn, $_POST['tourism']);
        $ict             = mysqli_real_escape_string($conn, $_POST['ict']);
        $financial       = mysqli_real_escape_string($conn, $_POST['financial']);
        
        $learn           = mysqli_real_escape_string($conn, $_POST['learn']);
        $expectations    = mysqli_real_escape_string($conn, $_POST['expectations']);
        $badge           = mysqli_real_escape_string($conn, $_POST['badge']);
        $read            = mysqli_real_escape_string($conn, $_POST['read']);
        $year            = mysqli_real_escape_string($conn, $_POST['year']);
        
        $password        = mysqli_real_escape_string($conn, $_POST['password']);
        $hashedPwd       = password_hash($password, PASSWORD_DEFAULT);
        
        if($business == 'Other'){
            $business = $business2;
        }else{
            $business = $business;
        }
        
        
        
        /*// Target directory
		$targetDir = "images/attendants/";
		
		// Get the original filename and file extension
		$fileTmpName      = $_FILES['photo']['tmp_name'];
        $originalFilename = basename($_FILES['photo']['name']);
        $fileExtension    = pathinfo($originalFilename, PATHINFO_EXTENSION);
        
        // Generate a unique name using a timestamp and the original extension
        $uniqueName = uniqid('photo_', true) . '.' . $fileExtension;
        $targetFile = $targetDir . $uniqueName;
    
        // Move uploaded file to the target directory
        move_uploaded_file($fileTmpName, $targetFile);*/
        
        $ins = "INSERT INTO `aseze_attendants` (`company`, `business_type`, `address`, `website`,  `first_name`, `last_name`, `password`, `designation`, `email`, `nationality`, `phone`, `photo`, `passport`, `gender`, `birth`, `invite`,
        `agroprocessing`, `renewable`, `minerals`, `pharmaceuticals`, `manufacturing`, `construction`, `logistics`, `tourism`, `ict`, `financial`, `learn`, `expectations`, `badge`,  
        `read_policy`, `year`, `qr-image`, `status`) VALUES ('$company', '$business', '$address', '$website', '$firstname', '$lastname', '$hashedPwd', '$designation', '$email', '$nationality', '$phone', ' ', '$passport', 
        '$gender', '$birth', '$invite', '$agroprocessing', '$renewable', '$minerals', '$pharmaceuticals', '$manufacturing', '$construction', '$logistics', '$tourism', '$ict', '$financial', '$learn', 
        '$expectations', '$badge', '$read', '$year', '$qrimage', 'not confirmed')";          
        	                                     			                                 					                                   				                           							                                                      					                                                              					                                  				
        $sni = mysqli_query($conn, $ins);
        
        move_uploaded_file($qrimage, $path);
        QRcode :: png($email, $qrcode, 'H', 4, 4);
        
        $admin = "nicecoffeeexpo@gmail.com";
        
        // Create the Transport
        $transport = (new Swift_SmtpTransport('mail.aseze.africa', 25))
          ->setUsername('info@aseze.africa')
          ->setPassword($deed);
                        
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
                        
        // Create a message
                       
        $message = (new Swift_Message('ASEZE Attendance registration'))
          ->setContentType("text/html")
          ->setFrom(['info@aseze.africa' => 'ASEZE'])
          ->setTo([$email, $admin => $name])
          ->setBody('<div style="border: 1px solid #cccccc; height: auto; width: 80%; padding: 20px; border-radius: 5px;">
                                            
                        <div style="width: 100%; height: 60px; background: white; margin-bottom: 50px;">
                            <div style="margin-bottom: 1px solid grey;">
                                <img width="240px" src= "'.$https.'images/asezelogo.png">
                            </div>
                        </div>
                        <div style="width: 90%; background: grey; margin: 0 auto;"></div>
                        <br>
                        <br>
                        <p>Hi '.$firstname.'</p>
                        <p>Thank you for registering to attend ASEZE 2025.</p>
                        <p>Your registration is being processed and we will contact you shortly with attendance payment details.</p>
                        <p>If you have an urgent issue or would like to reach out to us, you can use the phone number below or reply to this email.</p>
                        <p>We are glad to have you on board.</p>
                        <p>Our warm regards <br><br>ASEZE team<br>info@aseze.africa<br>+254 724 553437</p>
                        <div style="width: 100%; height: 30px; background: #5d924d;; border-radius: 5px 5px 5px 5px; position: relative; padding-top: 8px;">
                           
                        		<a target="_blank" href="https://www.facebook.com/profile.php?id=61565707160536" style="margin: 10px 20px 0 30px; position: relative;"><img src="'.$https.'images/icons/facebook.png" style="width: 22px;"></a>
                        	
                        		<a target="_blank" href="https://www.instagram.com/africa_sezs_expo" style="margin: 10px 20px 0 20px; position: relative;"><img src="'.$https.'images/icons/instagram.png" style="width: 22px;"></a>
                        	
                        		<a target="_blank" href="https://x.com/AfricaSEZs_Expo" style="margin: 10px 20px 0 20px; position: relative;"><img src="'.$https.'images/x-social-media.png" style="width: 22px;"></a>
                        	
                        </div>
                        <img style="width: 100%; margin: 0 auto;" src="'.$https.'images/Expo-flier.jpeg">
                    </div>');
                        
        // Send the message
        $result = $mailer->send($message); 
        
        header("Location: https://aseze.africa/register?rg=sucs"); 
        exit();
		
    }
    
?>




























