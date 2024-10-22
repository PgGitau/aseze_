<?php

include_once 'includes/inc.dbh.php';

$https = 'https://www.nicedirect.com/';


    $country = mysqli_real_escape_string($conn, $_POST['str']);
            
    $cnt = "SELECT * FROM country_code WHERE country = '$country' ";
    $tnc = mysqli_query($conn, $cnt);
    $cod = mysqli_fetch_assoc($tnc);
    $codi = $cod['code'];
    $tcod = $cod['tel_code']; 
    
    $code = strtolower($codi);
    
    echo ' <img style="float: left; width: 20px; margin-left: 1px; margin-right: 5px; position: relative; top: 4px;" src="images/flags/4x3/'.$code.'.svg"> '.$tcod.' ' ;               
            
            
            