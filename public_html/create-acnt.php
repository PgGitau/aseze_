<?php include_once 'header2.php'; ?>
    
    <div class="hero-wrap2" style="height: 150px; width: 100%;">
      
    </div>
    
    <section class="ftco-section3 bg-light">
      <div class="container">
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">NEW ACCOUNT</span>
            <h2 class="mb-4"><span>ASEZE </span> NEW ACCOUNT</h2>
          </div>
        </div>
      </div>
    </section>
    
    
    <div class="row d-flex justify-content-center mt-4 mb-4">
        <div class="col-md-8">
          <form action="includes/inc.signup.php" id="yakulogi" class="join-form" method="POST">
              <p>First Name</p>
              <input id="input11" class="input" type="text" name="first" placeholder="Enter your company name" required> 
              <p>Last Name</p>
              <input id="input22" class="input" type="text" name="last" placeholder="Enter medium" required>
              <p>Email addresss</p>
              <input id="input33" class="input" type="email" name="email" placeholder="Enter email address" required>
              <p>Phone</p>
              <input id="input44" class="input" type="text" name="phone" placeholder="Enter email address" required>
              <p>Role</p>
              <select class="join-form-select input" name="role" id="kantry"  required>
                    <option value="">Select role</option>
                    <option value="Admin">Admin</option>
                    <option value="Assistant">Assistant</option>
              </select>
              <p>Password</p>
              <input id="input1111" class="input" type="password" name="password" placeholder="Enter email address" required>
              <p>Repeat password</p>
              <input id="input1212" class="input" type="password" name="password_repeat" placeholder="Enter email address" required>
              <input type="hidden" name="year" value="2025">
              <button type="submit" name="Submit" value="Submit" class="submit px-3">Submit</button>
          </form>
        </div>
    </div>
    
<?php include_once 'footer2.php'; ?>


