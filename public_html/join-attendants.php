<?php include_once 'header2.php'; ?>
    
    <div class="hero-wrap2">
      
    </div>
    
    <section class="ftco-section3 bg-light">
      <div class="container">
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading"></span>
            <h2 class=""><span>ASEZE 2025</span> Registration</h2>
          </div>
        </div>
      </div>
    </section>
    
    
    <div class="row d-flex justify-content-center mt-4 mb-4">
        <div class="col-md-8">
          <form action="inc.join-attend.php" id="yakulogi" class="join-form" method="POST" enctype="multipart/form-data">
              <p>Name of your organization</p>
              <input id="inp1" class="input" type="text" name="company" placeholder="Enter your organizations name" required> 
              <p>Organization type</p> 
              <select id="kant2" class="join-form-select input" style="color: #888888;" name="business" required>
    		      <option value="">Select organization type</option>
    		      <option style="color: black;" value="Government Agency">Government Agency</option>
    		      <option style="color: black;" value="Non-Governmental Organization (NGO)">Non-Governmental Organization (NGO)</option>
    		      <option style="color: black;" value="Educational Institution">Educational Institution</option>
    		      <option style="color: black;" value="Trade Association">Trade Association</option>
    		      <option style="color: black;" value="International Organization">Multi National Enterprise</option>
    		      <option style="color: black;" value="Investor/Developer">Investor/Developer</option>
    		      <option style="color: black;" value="Consultant/Advisor">Consultant/Advisor</option>
    		      <option style="color: black;" value="Research Institute">Research Institute</option>
    		      <option style="color: black;" value="Other">Other</option>
    		  </select><br>
              <input id="inp3" class="input" type="text" name="business2" placeholder="Enter other organization type">
              <p>Organizations full address</p>
              <input id="inp4" class="input" type="text" name="address" placeholder="Enter organizations full address" required>
              <p>Organizations website</p>
              <input id="inp5" class="input" type="text" name="website" placeholder="Enter website url" required> 
              <div class="badge" style="margin-bottom: 38px; margin-top: 7px; position: relative;">
                <div class="badgebasket seperatedownwards" style="float: left;">
                  <p style="font-size: 16px; font-weight: normal; margin-bottom: 10px;">Passport first name</p>  
                  <input id="inp6" class="badgebaskethalf" style="font-size: 16px;" type="text" name="firstname" placeholder="Passport first name" required>
                </div>
                <div class="badgebasket" style="float: right;">
                  <p style="font-size: 16px; font-weight: normal; margin-bottom: 10px;">Passport last name</p>
                  <input id="inp66" class="badgebaskethalf" style="font-size: 16px;" type="text" name="lastname" placeholder="Passport last name" required>
                </div>
              </div>
              <br>
              <p>Designation <span style="font-size: 14px; color: #727272; margin-left: 6px;">(*Your role in organization)</span></p>
              <input id="inp7" class="input" type="text" name="designation" placeholder="Enter designation" class="half" required>
              <p>Applicant's email addresss</p>
              <input id="inp8" class="input" type="email" name="email" placeholder="Enter email address" required>
              <p>Nationality </p>
              <select id="kantry" class="join-form-select input" name="nationality" onchange="selectionchange()" required>
                    <option value="">Select country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D`ivoire">Cote D`ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea South">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People`s Democratic Republic">Lao People`s Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn Islands">Pitcairn Islands</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Barthelemy">Saint Barthelemy</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Martin">Saint Martin</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
              </select>
              <p>Tel Number</p>
              <span id="kabendera" style="float: left; top: 1px; width: auto;"></span>
              <input id="inp10" class="input" type="text" name="phone" placeholder="Enter code & number (+1 2345 6789)" required>
              <!--<p>Upload photo<span style="font-size: 14px; color: #727272; margin-left: 6px;">(e.g. Social media, Publication, Return Exhibitor, Referral, Digital Ad?)</span></p>
              <div class="upload-container">
                <label id="upload" class="upload-label" for="inp11">Choose a Photo</label> 
                <input id="inp11" type="file" name="photo" accept="image/*" onchange="previewImage(event)">
                <div class="preview" id="previewContainer"></div>
              </div>-->
              <p>Passport number</p>
              <input id="inp12" class="halfpassposrt" style="font-size: 16px;" type="text" name="passport" placeholder="Enter passport number"> 
              <br>
              <p>Gender</p>
              <select id="kant13" class="join-form-select2" name="gender" required>
                    <option value="">Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
              </select>
              <p>Date of birth</p> 
              <input id="inp14" class="join-form-select2" style="font-size: 16px; color: #6c6c6c;" type="date" name="birth"  required>
              
              <div class="badge">
                <div class="form-check">
                    <label class="containercheck">
                      <input id="inp15" type="checkbox"  name="invite" value="yes">
                      <span id="inpt10" class="checkmark"></span>
                    </label>
                    <p style="width: 100%; font-size: 16px; margin-left: 16px; font-weight: normal;">I require invitation letter</p>
                </div>
              </div>
              <br>
              <p style="margin-top: 20px;">Sectors of interest</p>
              <div class="badge2" id="badge2">
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="agroprocessing" value="Agro-processing">
                            <span class="checkmark"></span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">Agro-processing</p>
                        </label>
                        
                    </div>
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="renewable" value="Renewable energy">
                            <span class="checkmark"></span>
                            </span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">Renewable energy</p>
                        </label>
                    </div>
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="minerals" value="Minerals & Natural resources">
                            <span class="checkmark"></span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">Minerals & Natural resources</p>
                        </label>
                        
                    </div>
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="pharmaceuticals" value="Pharmaceuticals & Health">
                            <span class="checkmark"></span>
                            </span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">Pharmaceuticals & Health</p>
                        </label>
                    </div>
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="manufacturing" value="Manufacturing">
                            <span class="checkmark"></span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">Manufacturing</p>
                        </label>
                        
                    </div>
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="construction" value="Construction & real estate">
                            <span class="checkmark"></span>
                            </span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">Construction & real estate</p>
                        </label>
                    </div>
                    
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="logistics" value="Logistics & warehousing">
                            <span class="checkmark"></span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">Logistics & warehousing</p>
                        </label>
                    </div>
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="tourism" value="Tourism & hospitality">
                            <span class="checkmark"></span>
                            </span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">Tourism & hospitality</p>
                        </label>
                    </div>
                    
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="ict" value="ICT & Telecommunications">
                            <span class="checkmark"></span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">ICT & Telecommunications</p>
                        </label>
                    </div>
                    <div class="badgebasket">
                        <label class="containercheck">
                            <input type="checkbox"  name="financial" value="Financial services">
                            <span class="checkmark"></span>
                            </span>
                            <p style="margin-left: 35px; line-height: 35px; position: relative; color: grey;">Financial services</p>
                        </label>
                    </div>
              </div>
              <br>
              <p>How did you learn about the expo:<span style="font-size: 14px; color: #727272; margin-left: 6px;"> Social media, Publication, Return Exhibitor, Referral, Digital Ad?</span></p>
              <input id="inp16" class="input" type="text" name="learn" placeholder="Enter medium" required>
              <p>What benefits do you expect from ASEZE 2025</p>
              <textarea id="input1313" class="input" type="textarea" name="expectations" placeholder="Write expectations here" required></textarea>
              <p>Badge type</p>
              <div class="badge">
                    <label class="containeradio">
                      <input id="inp18" type="radio"  name="badge" value="3 day">
                      <span id="inp1818" class="checkmarkradio"></span>
                    </label>
                    <p style="width: 100%; font-size: 16px; margin-left: 30px; font-weight: normal; position: relative;">3 Day Badge - $299</p>
              </div>
              <div class="badge">
                    <label class="containeradio">
                      <input id="inp19" type="radio"  name="badge" value="2 day">
                      <span id="inp1919" class="checkmarkradio"></span>
                    </label>
                    <p style="width: 100%; font-size: 16px; margin-left: 30px; font-weight: normal; position: relative;">2 Day Badge - $165</p>
              </div>
              <div class="badge">
                    <label class="containeradio">
                      <input id="inp20" type="radio"  name="badge" value="1 day">
                      <span id="inp2020" class="checkmarkradio"></span>
                    </label>
                    <p style="width: 100%; font-size: 16px; margin-left: 30px; font-weight: normal; position: relative;">1 Day Badge - $125</p>
              </div>
              <p style="font-size: 13px; color: #c0c0c0; margin-top: 20px; margin-bottom: 20px;">Early bird discount -10% up to April 31st, 2025. Group discount -5% for 2+ tickets.</p>
              
              <p>Create password<span style="font-size: 14px; color: #727272; margin-left: 6px;"> To help you retrieve your data later after you sign up</span></p>
              <div class="password-container">
                <input id="passwordInput" class="input" style="padding-right: 37px;" type="password" name="password" placeholder="Create password" required>
                <span id="togglePassword" class="eye-icon"><img id="toggleImage" src="images/icons/eyebrow.png" alt="Toggle Eye" class="eye-icon"  onclick="passFunction()"></span> <!-- Eye icon -->
              </div>
              
              <div class="badge">
                <div class="form-check">
                    <label class="containercheck">
                      <input type="checkbox"  name="read" value="read" required>
                      <span id="inp21" class="checkmark"></span>
                    </label>
                    <p style="width: 100%; font-size: 14px; margin-left: 16px; color: grey; font-weight: normal;">I have read & agree to <a class="" download="Terms & Conditions.pdf" href="downloads/Terms & Conditions.pdf" style="text-decoration: none; font-weight: bold;">Terms & Conditions</a></p>
                </div>
              </div>
              <input type="hidden" name="year" value="2025">
              <button id="submitattend" class="submit px-3" type="submit" name="submit" value="Submit">Proceed to checkout</button>
          </form>
        </div>
    </div>
    

    <?php include_once 'footer.php'; ?>


<script>
    //toggle password view 
$('#toggleImage').on('click', function() {
    const image = document.getElementById("toggleImage");
    const passwordInput = $('#passwordInput');
    const inputType = passwordInput.attr('type') === 'password' ? 'text' : 'password';
            
    // Toggle the input type between 'password' and 'text'
    passwordInput.attr('type', inputType);
});

//toggle password icon view 
function passFunction() {
  const x       = document.getElementById("passwordInput");
  const image = document.getElementById("toggleImage");
  if (x.type === "password") {
    image.src = 'images/icons/eye-open.png'; // Change to open eye image
  } else {
    image.src = 'images/icons/eyebrow.png'; // Change to closed eye image
  }
}
</script>





























