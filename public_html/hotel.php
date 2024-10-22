<?php include_once 'header.php'; ?>
    
    <section class="hero-wrap js-fullheight hero-wrap-bg-image2">
      <video autoplay muted loop class="banner-video">
        <source src="images/techpattern.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread panda">Hotels & Travel</h1>
		    <a href="reserve"><div id="myBtns" class="download panda"><p class="downloadp" style="color: white;">Make reservation</p></div></a>
		    <br>
            <p class="breadcrumbs panda"><span class="mr-2"><a href="about">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Hotels & Travel <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-counter img" id="section-counter" style="margin-top: 50px;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Hotels & Travel</span>
            <h2 class="mb-1"><span>Official Hotel & Travel</span> Partner</h2>
          </div>
          <p style="margin-left: 15px; margin-right: 10px;">We have done the leg work so that all you have to do is enjoy exceptional hospitality during your stay in Nairobi. Take advantage of special rates 
             and preferential treatment by using the official Accomodation and Travel Partner.</p>
		  <p style="margin-left: 15px; margin-right: 10px;"><b>NB: </b>We may not be able to assist in the case of reservations made by unofficial organizations which may be illegimate, 
		     with unreasonable cacellation or may charge penalties or be completely unrefundable.</p></p>
		  <!-- Trigger/Open The Modal -->
          <a href="reserve"><div id="myBtn" class="download" style="margin-top: 20px;"><p class="downloadp">Make reservation</p></div></a>                 
        </div>
      </div>
    </section>

	<section class="ftco-counter img" id="section-counter">
      <div class="container">
    	<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(images/hotel.jpg);"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-5">
    			 <div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">HOTELS</span>
		            <h2 class="mb-4"><span>Nairobi</span> Hotels</h2>
		            <p>Nairobi hotels cater for all tastes from high end hotels with top-notch amenities, exceptional service, and luxurious
		               accommodations, mid range hotels with comfortable accommodation and decent amenities and budget hotels and guest houses 
		               that provide basic but clean and comfortable accommodations. </p>
		          </div>
		         </div>
	        </div>
        </div>
      </div>
    </section>	
    
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2 style="font-size: 32px;">Subcribe to our Newsletter</h2>
              <p>Get updates and news on new developments</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="includes/inc.subscriptions.php" class="subscribe-form" method="POST">
                    <div class="d-flex">
                      <input type="email" name="email" class="form-control inputter" placeholder="Enter email address" required>
                      <input type="hidden" name="page" value="hotel">
                      <input type="submit" name="submit" value="submit" class="submitter px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <?php include_once 'footer.php'; ?>

