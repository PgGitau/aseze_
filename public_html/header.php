<!DOCTYPE html>
<?php $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullurl, "about") == true) {
            $about = "True";
        }else{
            $about = "Flse";
        }
        if (strpos($fullurl, "exhibit") == true) {
            $exhibit = "True";
        }else{
            $exhibit = "Flse";
        }
        if (strpos($fullurl, "sponsors") == true) {
            $sponsors = "True";
        }else{
            $sponsors = "Flse";
        }
        if (strpos($fullurl, "attend") == true) {
            $attend = "True";
        }else{
            $attend = "Flse";
        }
        if (strpos($fullurl, "hotel") == true) {
            $hotel = "True";
        }else{
            $hotel = "Flse";
        }
        if (strpos($fullurl, "news") == true) {
            $news = "True";
        }else{
            $news = "Flse";
        }
        if (strpos($fullurl, "contact") == true) {
            $contact = "True";
        }else{
            $contact = "Flse";
        }
        if (strpos($fullurl, "reserve") == true) {
            $reserve = "True";
        }else{
            $reserve = "Flse";
        }
        if (strpos($fullurl, "subs=sucs") == true) {
            echo "  <script>
                        swal('Subscription successfull!', 'You will receive updates on the email you provided.');
                	</script>";
        }
?>
<html lang="en">
  <head>
    <title>ASEZE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="images/asezefav.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/my-styles.css">
    
    <!-- SWEET ALERT -->
    <script src="js/sweetalert/sweetalert.min.js"></script>
    
  </head>
  
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="about"><img style="width: 150px;" src="images/asezelogo.png"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu" style="color: #7c7c7c; margin-right: 10px;"></span> 
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item <?php if($about == "True"){echo "active";}else{echo "";}  ?>"><a href="about" class="nav-link">About</a></li>
	          <li class="nav-item <?php if($exhibit == "True" || $join == "True"){echo "active";}else{echo "";}  ?>"><a href="exhibit.php" class="nav-link">Exhibit</a></li>
	          <li class="nav-item <?php if($sponsors == "True" || $portrait_gold == "True"){echo "active";}else{echo "";}  ?>"><a href="sponsors.php" class="nav-link">Sponsors</a></li>
	          <li class="nav-item <?php if($attend == "True" || $register == "True"){echo "active";}else{echo "";}  ?>"><a href="attend.php" class="nav-link">Attend</a></li>
	          <li class="nav-item <?php if($hotel == "True" || $reserve == "True"){echo "active";}else{echo "";}  ?>"><a href="hotel.php" class="nav-link">Hotel & Travel</a></li>
	          <!--<li class="nav-item <?php if($news == "True"){echo "active";}else{echo "";}  ?>"><a href="news" class="nav-link">News</a></li>-->
	          <li class="nav-item <?php if($contact == "True"){echo "active";}else{echo "";}  ?>"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
  
    <?php   if (strpos($fullurl, "subs=sucs") == true) {
            echo "  <script>
                        swal('Subscription successful!', 'You will receive updates on the email you provided.');
                	</script>";
            }if (strpos($fullurl, "eml=exst") == true) {
            echo "  <script>
                        swal('Email exists!', 'The email you used is already registered.');
                	</script>";
            }if (strpos($fullurl, "msg=sucs") == true) {
            echo "  <script>
                        swal('Message sent successfully!', 'We will review your message and get back as soon as possible.');
                	</script>";
            }if (strpos($fullurl, "res=sucs") == true) {
            echo "  <script>
                        swal('Submitted successfully!', 'Our hotel and travel partner will get back as soon as possible.');
                	</script>";
            }
    ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  