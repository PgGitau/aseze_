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
            <h1 class="mb-3 bread panda2">Contact Us</h1>
            <p class="breadcrumbs panda2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Triple Two Address, Fourth Floor, Office No. 4D. Eastern Bypass, Kamakis, Ruiru, Kenya.</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 254 724 553437</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@aseze.africa</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">https://aseze.africa</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="includes/contact_form.php" class="bg-light p-55 contact-form" method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5" style="width: 100%;">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="" class="bg-white" style="width: 100%;">
          	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.909756339128!2d36.9629110276321!3d-1.1763485851820576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f41a185d5d2d7%3A0xd1e26028f5b03a0a!2sThe%20Triple%20Two%20Address!5e0!3m2!1sen!2ske!4v1726662442934!5m2!1sen!2ske" class="iframeclass" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                      <input type="hidden" name="page" value="contact">
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
    <style>
        
    </style>
    <?php include_once 'footer.php'; ?>
    
    
    
    