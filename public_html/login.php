<?php include_once 'header2.php'; ?>

  
    <div class="hero-wrap2" style="height: 150px; width: 100%;">
      
    </div>
    
    <section class="ftco-section3 bg-light">
      <div class="container">
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">LOG IN</span>
            <h2 class="mb-4"><span>ASEZE </span> LOG IN </h2>
          </div>
        </div>
      </div>
    </section>

    <div class="row d-flex justify-content-center mt-4 mb-4">
        <div class="col-md-8">
          <form action="includes/inc.login.php" id="yakulogi" class="join-form" method="POST">
              <p>Email addresss</p>
              <input id="input33" class="input" type="email" name="email" placeholder="Enter email address" required>
              <p>Password</p>
              <input id="input1111" class="input" type="password" name="password" placeholder="Enter email address" required>
              <input type="hidden" name="year" value="2025">
              <button type="submit" name="Submit" value="Submit" class=" px-3">Log in</button>
          </form>
        </div>
    </div>
 
<?php include_once 'footer2.php'; ?>


