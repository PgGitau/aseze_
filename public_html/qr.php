<?php include_once 'header2.php'; ?>

<br>
<br>
<br>

<h3 align="center">QR Generation Form</h3><br/>
    <div class="box">
     <form method="post" action="qr-code.php" > 
      <div class="form-group">
         <label>QR Text</label>
         <input type="text" name="qrtext" id="qrtext" placeholder="Enter QR Text" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="sbt-btn" value="QR Generate" class="btn btn-success" />
      </div>
     </form>
    </div>
    
    <?php   
    $sel = "SELECT * FROM aseze_qr_code"; 
            $les = mysqli_query($conn, $sel);
            
            while ($row = mysqli_fetch_assoc($les)) {

                $qrimage = $row['qrimage'];
                    
                echo "<img src='images/qrcode/".$qrimage."'>";
            }
            
    ?>
    
    
    
    
    
    
    
    