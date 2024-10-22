<?php
    
    ob_start();
    
    include_once 'inc.dbh.php';	
    
    require_once 'vendor/autoload.php';
    
    $https = 'https://aseze.africa/'; 
    
    if(isset($_POST['submit'])){
    
        $email    = mysqli_real_escape_string($conn, $_POST['email']);
        $page     = mysqli_real_escape_string($conn, $_POST['page']);
        
        //Check if email is exists
		$sql = "SELECT * FROM aseze_subscriptions WHERE email = '$email'";
		$result = mysqli_query($conn, $sql); 
		$resultCheck = mysqli_num_rows($result);
		
		// Create a message
        $admin = 'exhibit@aseze.africa';
        
        // Create the Transport
        $transport = (new Swift_SmtpTransport('mail.aseze.africa', 25))
          ->setUsername('info@aseze.africa')
          ->setPassword($deed);
                        
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
                        
        // Create a message 
        $message = (new Swift_Message('ASEZE messaging'))
          ->setContentType("text/html")
          ->setFrom(['exhibit@aseze.africa' => 'ASEZE'])
          ->setTo([$email, $admin => $name])
          ->setBody('<div style="border: 1px solid #cccccc; height: auto; width: 380px; padding: 20px; border-radius: 5px;">
                                            
                        <div style="width: 100%; height: auto; background: white;">
                            <div align="center">
                                <img align="center" width="240px"  src= "'.$https.'images/asezelogo.png">
                            </div>
                        </div>
                                            
                        <div width="80%" align="centered" style="background: #cfcfcf; height: 1px; margin-bottom: 30px; margin-top: 7px;"></div> 
                                            
                        <div style="width: 100%; height: auto; background: white; color: black; margin-bottom: 30px;">
                            <p style="font-size: 15px">Hello</p> 
                            <p style="font-size: 15px">Thank you for suscribing to ASEZE updates.</p>
                            <p style="font-size: 15px">Your message is being processed and one of our team members will contact you shortly.</p>
                            <p style="font-size: 15px">If you have an urgent query kindly call us on +254 724 553437.</p>
                            <p style="font-size: 15px">We are glad to have you on board.</p>
                            <p style="font-size: 15px">Our warm regards.</p>
                            <br><br>
                            <p style="font-size: 15px">ASEZE team</p>
                            <br>
                            <p style="font-size: 15px">exhibit@aseze.africa<br>+254 724 553437</p>
                        </div>
                        
                        <div style="width: 100%; height: auto; background: white; font-size: 12px; color: grey; margin-bottom: 20px;">
                            <p align="center" style="line-height: 12px; font-size: 15px;">
                                <a style="text-decoration: none;" href="'.$https.'about"> About </a> | 
                                <a style="text-decoration: none;" href="'.$https.'exhibit">Exhibit </a> | 
                                <a style="text-decoration: none;" href="'.$https.'attend">Attend</a>
                            </p>
                            <p align="center"> 
                                We sent this email to '.$email.' <a style="text-decoration: none;" href="'.$https.'includes/unsubscribe202.inc.php?exma='.$email.'"> - Unsubscribe </a>
                            </p>
                            <p style="font-size: 12px; text-align: center;"> 
                                Triple Two Address, Fourth Floor, Office No. 4D. Eastern Bypass, Kamakis, Ruiru, Kenya. +254 724 553437. 
                            </p>
                        </div>
                                            
                        <div style="width: 100%; height: 40px; background: #5d924d;; border-radius: 5px 5px 5px 5px; position: relative;">
                            <div style="width: 25%; display: in-line block; float left; position: relative; background: red">
                        		<a target="_blank" href="https://www.facebook.com/profile.php?id=61565707160536" style="margin: 0 auto;"><img src="'.$https.'images/icons/facebook.png" style="width: 22px;"></a>
                        	</div>
                        	<div style="width: 25%; display: in-line block; float left; position: relative; background: blue">
                        		<a target="_blank" href="https://www.instagram.com/africa_sezs_expo" style="margin: 0 auto;"><img src="'.$https.'images/icons/instagram.png" style="width: 22px;"></a>
                        	</div>
                        	<div style="width: 25%; display: in-line block; float left; position: relative; background: red">
                        		<a target="_blank" href="https://x.com/AfricaSEZs_Expo" style="margin: 0 auto;"><img src="'.$https.'images/x-social-media.png" style="width: 22px;"></a>
                        	</div>
                        </div>
                    </div>');
                        
        // Send the message
        $result = $mailer->send($message); 
        
       /* if ($resultCheck > 0) {
            if($page == "about"){
                header("Location: https://aseze.africa/about?eml=exst");
			    exit();
            }if($page == "attend"){
                header("Location: https://aseze.africa/attend?eml=exst");
			    exit();
            }if($page == "hotel"){
                header("Location: https://aseze.africa/hotel?eml=exst");
			    exit();
            }if($page == "news"){
                header("Location: https://aseze.africa/news?eml=exst");
			    exit();
            }if($page == "contact"){
                header("Location: https://aseze.africa/contact?eml=exst");
			    exit();
            }*/
			
		//}else{
        	
            $ins = "INSERT INTO `aseze_subscriptions` (`email`, `status`) VALUES ('$email', 'active')";          
            $sni = mysqli_query($conn, $ins);
            
            if($page == "about"){
                header("Location: https://aseze.africa/about?subs=sucs"); 
        	    exit();
            }if($page == "attend"){
                header("Location: https://aseze.africa/attend?subs=sucs"); 
        	    exit();
            }if($page == "hotel"){
                header("Location: https://aseze.africa/hotel?subs=sucs"); 
        	    exit();
            }if($page == "news"){
                header("Location: https://aseze.africa/news?subs=sucs"); 
        	    exit();
            }if($page == "contact"){
                header("Location: https://aseze.africa/contact?subs=sucs"); 
        	    exit();
            }
		//}
    }

?>

















