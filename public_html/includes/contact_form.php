<?php
    
    ob_start();
    
    include_once 'inc.dbh.php';	
    
    require_once 'vendor/autoload.php';
    
    $https = 'https://aseze.africa/'; 
    
    if(isset($_POST['submit'])){
        
        $name     = mysqli_real_escape_string($conn, $_POST['name']);
        $email    = mysqli_real_escape_string($conn, $_POST['email']);
        $subject  = mysqli_real_escape_string($conn, $_POST['subject']);
        $message  = mysqli_real_escape_string($conn, $_POST['message']);
        
        $ins = "INSERT INTO `aseze_contact_form` (`name`, `email`, `subject`, `message`, `viewed`) VALUES ('$name', '$email', '$subject', '$message', 'no')";          
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
        $message = (new Swift_Message('ASEZE messaging'))
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
                        <p>Dear '.$name.'</p>
                        <p>Thank you for reaching out to us.</p>
                        <p>Your message is being processed and one of our team members will contact you shortly.</p>
                        <p>If you have an urgent query kindly call us on +254 724 553437.</p>
                        <p>We are glad to hear from you.</p>
                        <p>Our warm regards <br><br><br>ASEZE team<br>exhibit@aseze.africa<br>+254 724 553437</p>
                    </div>');
                        
        // Send the message
        $result = $mailer->send($message); 
        
        header("Location: https://aseze.africa/contact?msg=sucs"); 
        exit();
		
    }

?>













