<?php
    
    ob_start();
    
    include_once 'inc.dbh.php';	
    
    require_once 'vendor/autoload.php';
    
    $https = 'https://aseze.africa/'; 
    
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
        $country         = mysqli_real_escape_string($conn, $_POST['country']);
        $phone           = mysqli_real_escape_string($conn, $_POST['phone']);
        $booth1          = mysqli_real_escape_string($conn, $_POST['booth1']);
        $booth2          = mysqli_real_escape_string($conn, $_POST['booth2']);
        $year            = mysqli_real_escape_string($conn, $_POST['year']);
        $expect          = mysqli_real_escape_string($conn, $_POST['expectations']);
        $learn           = mysqli_real_escape_string($conn, $_POST['learn']);
        $agree           = mysqli_real_escape_string($conn, $_POST['read']);
        
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
        
        if($business == 'Other'){
            $business = $business2;
        }else{
            $business = $business;
        }
        
        $ins = "INSERT INTO `aseze_exhibitors` (`company`, `learn`, `first_name`, `last_name`, `designation`, `email`, `country`, `phone`, `website`, `business`, `business_address`, `booth1`, `booth2`, `expectations`, `year`, `read_policy`, `agroprocessing`, `renewable`, `minerals`, `pharmaceuticals`, `manufacturing`, `construction`, `logistics`, `tourism`, `ict`, `financial`,  `status`) VALUES ('$company', '$learn', '$firstname', '$lastname', '$designation', '$email', '$country', '$phone', '$website', '$business', '$address', '$booth1', '$booth2', '$expect', '$year', '$agree', '$agroprocessing', '$renewable', '$minerals', '$pharmaceuticals', '$manufacturing', '$construction', '$logistics', '$tourism', '$ict', '$financial', 'processing')";          
        $sni = mysqli_query($conn, $ins);
        
        // Create a message
        $admin = 'exhibit@aseze.africa';
        
        // Create the Transport
        $transport = (new Swift_SmtpTransport('mail.aseze.africa', 25))
          ->setUsername('info@aseze.africa')
          ->setPassword($deed);
                        
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
                        
        // Create a message 
        $message = (new Swift_Message('ASEZE Booth Reservation'))
          ->setContentType("text/html")
          ->setFrom(['exhibit@aseze.africa' => 'ASEZE'])
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
                        <p>Dear '.$firstname.'</p>
                        <p>Thank you for submitting your reservation for space at ASEZE 2025.</p>
                        <p>Your application is being processed and one of our team members will contact you shortly with information on how to complete the reservation.</p>
                        <p>Please note that filling the application form is not a guarantee that your preferred booth is reserved for you. Such guarantee is effected 
                           upon payment of either the deposit or full amount.</p> 
                        <p>Kindly view the <a download="Terms & Conditions.pdf" href="'.$https.'downloads/Terms & Conditions.pdf" style="font-weight: bold; color: #5d924d;">Terms & Conditions</a>
                           for further participation details.</p>
                        <p>If you have a query you can reach out to us by replying to this email or by calling directly.</p>
                        <p>We are glad to have you on board.</p>
                        <p>Our warm regards <br><br><br>ASEZE team <br>exhibit@aseze.africa <br>+254 724 553437 <br>Triple Two Address, Fourth Floor, Office No. 4D. <br>Eastern Bypass, Kamakis, Ruiru, Kenya.</p>
                        <div style="width: 100%; height: 30px; background: #5d924d;; border-radius: 5px 5px 5px 5px; position: relative; padding-top: 8px;">
                           
                        		<a target="_blank" href="https://www.facebook.com/profile.php?id=61565707160536" style="margin: 10px 20px 0 30px; position: relative;"><img src="'.$https.'images/icons/facebook.png" style="width: 22px;"></a>
                        	
                        		<a target="_blank" href="https://www.instagram.com/africa_sezs_expo" style="margin: 10px 20px 0 20px; position: relative;"><img src="'.$https.'images/icons/instagram.png" style="width: 22px;"></a>
                        	
                        		<a target="_blank" href="https://x.com/AfricaSEZs_Expo" style="margin: 10px 20px 0 20px; position: relative;"><img src="'.$https.'images/x-social-media.png" style="width: 22px;"></a>
                        	
                        </div>
                        <img style="width: 100%; margin: 0 auto;" src="'.$https.'images/Expo-flier.jpeg">
                    </div>');
                        
        // Send the message
        $result = $mailer->send($message); 
        
        header("Location: https://aseze.africa/join?jn=sucs"); 
        exit();
		
    }
    
?>







