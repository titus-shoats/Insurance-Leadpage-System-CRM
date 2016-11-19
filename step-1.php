<?php
require("includes/header.php");
?>
    <section class="content custom_step_1">
    <div class="contact_top_container">

        <ul class="contact_top_nav_ul">
            <li id="contact_top_nav_quotes" class="contact_top_nav_li ">
                <h2> <span class="logo_text1"><strong>Healthy Insurance</strong></span> <span class="logo_text2"><strong>Quotes</strong></span></h2>
            </li>

        </ul>
    </div>
        <div class="security_info">
            <h2>We take security seriously.</h2>
            <p> <i class="fa fa-lock fa-4x orange pull-left"></i>
                Healthy Insurance Quotes uses 256-bit SSL encryption to ensure your information is kept safe.
            </p>
        </div>
        <div class="step_1_form_container">
               <form  id="step_1_form"  class="step_1_form" method="post" action="confirm.php" enctype="application/x-www-form-urlencoded">
                   <h3>Personal Information</h3>

                   <section class="personal_info">
                       <div class="row">
                           <div class="col-md-4 form-group has-feedback">
                               <label for="first_name">First Name</label>
                               <input name="first_name" tabindex="2" type="text" class="form-control" id="first_name" value="" data-bv-field="first_name"><i class="form-control-feedback" data-bv-icon-for="first_name" style="display: none;"></i>
                           </div>
                           <div class="col-md-4 form-group has-feedback">
                               <label for="last_name">Last Name</label>
                               <input name="last_name" tabindex="3" type="text" class="form-control" id="last_name" value="" data-bv-field="last_name"><i class="form-control-feedback" data-bv-icon-for="last_name" style="display: none;"></i>
                               <small class="help-block" data-bv-validator="notEmpty" data-bv-for="last_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Last Name</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="last_name" data-bv-result="NOT_VALIDATED" style="display: none;">Last Name must be more than 2 characters long</small>
                            </div>

                           <div class="col-md-4 form-group has-feedback">
                               <label for="email">Email</label>
                               <input name="email" tabindex="6" type="email" class="form-control" id="email" value="" ><i class="form-control-feedback" data-bv-icon-for="email" style="display: none;"></i>
                               <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;"></small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The value is not a valid email address</small><small class="help-block" data-bv-validator="regexp" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The value is not a valid email address</small>
                           </div>
                      </div>

                       <div class="row">

                           <div class="col-md-4 form-group has-feedback">
                               <label for="home_phone">Contact Phone</label>
                               <input name="home_phone" type="text" tabindex="7" class="form-control bfh-phone" id="home_phone" data-fv-phone-country="US" data-fv-phone-message="Invalid Phone" data-fv-phone="true" value="" data-bv-field="home_phone" maxlength="10"><i class="form-control-feedback" data-bv-icon-for="home_phone" style="display: none;"></i>
                           </div>
                           <div class="col-md-4 form-group has-feedback">
                               <label for="address">Home Address</label>
                               <input name="address" type="text" maxlength="100" tabindex="8" class="form-control" id="address" value="" data-bv-field="address"><i class="form-control-feedback" data-bv-icon-for="address" style="display: none;"></i>
                           </div>

                           <div class="col-md-4 form-group has-feedback">
                               <label for="city">City</label>
                               <input name="city" tabindex="9" type="text" class="form-control" id="city" value=" " data-bv-field="city"><i class="form-control-feedback" data-bv-icon-for="city" style="display: none;"></i>
                           </div>

                       </div>
                       <div class="row">

                           <div class="col-md-4 form-group dropdown-single has-feedback">
                               <label for="state">State</label>
                               <select name="state" id="state" tabindex="10" class="form-control" data-bv-field="state">
                                   <option value="" selected>State</option>
                                   <option value="AL">Alabama</option>
                                   <option value="AK">Alaska</option>
                                   <option value="AZ">Arizona</option>
                                   <option value="AR">Arkansas</option>
                                   <option value="CA">California</option>
                                   <option value="CO">Colorado</option>
                                   <option value="CT">Connecticut</option>
                                   <option value="DE">Delaware</option>
                                   <option value="DC">District of Columbia</option>
                                   <option value="FL">Florida</option>
                                   <option value="GA">Georgia</option>
                                   <option value="HI">Hawaii</option>
                                   <option value="ID">Idaho</option>
                                   <option value="IL" >Illinois</option>
                                   <option value="IN">Indiana</option>
                                   <option value="IA">Iowa</option>
                                   <option value="KS">Kansas</option>
                                   <option value="KY">Kentucky</option>
                                   <option value="LA">Louisiana</option>
                                   <option value="ME">Maine</option>
                                   <option value="MD">Maryland</option>
                                   <option value="MA">Massachusetts</option>
                                   <option value="MI">Michigan</option>
                                   <option value="MN">Minnesota</option>
                                   <option value="MS">Mississippi</option>
                                   <option value="MO" >Missouri</option>
                                   <option value="MT">Montana</option>
                                   <option value="NE">Nebraska</option>
                                   <option value="NV">Nevada</option>
                                   <option value="NH">New Hampshire</option>
                                   <option value="NJ">New Jersey</option>
                                   <option value="NM">New Mexico</option>
                                   <option value="NY">New York</option>
                                   <option value="NC">North Carolina</option>
                                   <option value="ND">North Dakota</option>
                                   <option value="OH">Ohio</option>
                                   <option value="OK">Oklahoma</option>
                                   <option value="OR">Oregon</option>
                                   <option value="PA">Pennsylvania</option>
                                   <option value="RI">Rhode Island</option>
                                   <option value="SC">South Carolina</option>
                                   <option value="SD">South Dakota</option>
                                   <option value="TN">Tennessee</option>
                                   <option value="TX">Texas</option>
                                   <option value="UT">Utah</option>
                                   <option value="VT">Vermont</option>
                                   <option value="VA">Virginia</option>
                                   <option value="WA">Washington</option>
                                   <option value="WV">West Virginia</option>
                                   <option value="WI">Wisconsin</option>
                                   <option value="WY">Wyoming</option>
                               </select><i class="form-control-feedback" data-bv-icon-for="state" style="display: none;"></i>
                           </div>
                           <div class="col-md-4 form-group has-feedback">
                               <label for="zip_code">Zip Code</label>
                               <input maxlength="5" name="zip_code" type="text" class="form-control" id="zip_code" value="<?php if(!empty($_POST['enter_zip_code'])){echo $_POST['enter_zip_code'];}  ?>" tabindex="11" data-fv-zipcode-country="US" data-fv-zipcode-message="Invalid Zipcode"><i class="form-control-feedback" data-bv-icon-for="zip_code" style="display: none;"></i>
                           </div>

                           <div class="col-md-4 form-group has-feedback">
                               <label for="dob">Date of Birth</label>
                               <input name="dob" type="date" class="form-control" id="dob" value="" tabindex="11"  data-fv-date-format="MM/DD/YYYY" data-fv-date-message="Birth Date is Required" data-fv-date-separator="/"/><i class="form-control-feedback" data-bv-icon-for="dob" style="display: none;"></i>
                           </div>
                       </div>
                   </section>




               <section class="custom_warning">
                    <p>By submitting your application you certify that you are at least 18 years old and agree to this site’s Terms of Use and Privacy Policy and consent to receiving email from us.
                        Complete all form fields to continue
                    </p>
                   <input class="custom_submit" id="custom_submit" type="submit" value="Submit"/>

                   <p>
                       By clicking "Submit" I provide my signature, expressly authorizing up to eight insurance companies or their agents or partner companies to contact me at the number and address provided with insurance quotes or to obtain additional information for such purpose, via live, prerecorded or autodialed calls, text messages or email. I understand that my signature is not a condition of purchasing any property, goods or services and that I may revoke my consent at any time.

                       I understand that the insurance companies or their agents or partner companies may confirm my information through the use of a consumer report. I agree to this website's Privacy Policy and acknowledge that as a member I will receive insurance quote reminders and special promotions sent to me via e-mail. I acknowledge that I have read and understand this website's Terms and Conditions, and I agree to be bound by them.
                   </p>
               </section>
               </form>
        </div>



    </section>

<?php
require("includes/footer.php");
?>