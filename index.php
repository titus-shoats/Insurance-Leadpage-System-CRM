<?php
require("includes/header.php");
?>

    <header><h2><strong>Compare Affordable Health Insurance Plans Right Now!</strong></h2></header>
           <img id="clouds_img" src="images/funnel-bg-clouds.jpg"/>
           <img id="doctor_img" src="images/funnel-doctor-female-8bt.png"/>


        <form  id="intro_zip_form" class="intro_zip_form" action="step-1.php" enctype="application/x-www-form-urlencoded" method="post">
           <div class="intro_form_header">
               <h2>Health Insurance In 5 Minutes</h2>
               <br/>
           </div>



            <div class="col-md-4 form-group has-feedback intro_form_content">
                <label for="enter_zip_code">My zipcode is</label>
                <input name="enter_zip_code" tabindex="3" type="text" class="form-control" id="enter_zip_code" value="" data-fv-zipcode-country="US" data-fv-zipcode-message="Error"  maxlength="5"><i class="form-control-feedback" data-bv-icon-for="enter_zip_code" style="display: none;"></i>

            </div>

            <div class="intro_form_footer has-feedback" >

                  <input type="submit" value="Start Now" class="continue_btn"  disabled/>

            </div>



        </form>

        <div class="how_we_work">
            <img src="images/carriers-health.png"/>
             <h2 class="section_title_tips">How We <span class="bold_emphasis"><strong>Work</strong></span></h2>
            <p>Its a simple 3 step process:</p>
            <ul>
                <li>1.Enter your zipcode</li>
                <li>2.Complete our fast & easy quote form</li>
                <li>3.Agents contact you to review your quotes</li>
            </ul>
            <h2 class="section_title_tips">Why Choose <span class="bold_emphasis"><strong>Us</strong></span></h2>
            <p>We help you navigate the often confusing world of health insurance! After answering a few simple questions,
                we connect you with one of our partner insurance agents who will help you determine your subsidy eligibility and
                provide you with quotes for private or state and federal exchange health insurance plans. All of these plans meet
                federal standards under the Affordable Care Act (ACA). Please note, that not everyone will qualify for a federal
                or state subsidy, or an Obamacare plan. Our site and partner agents are here to provide information & help in choosing
                the right plan for you
            </p>

            <ul class="promo_icons p_icons">
                <li class="money">
                    <strong>Save Money</strong>
                </li>
                <li class="save_time p_icons">
                    <strong>Save Time</strong>
                </li>
                <li class="agents p_icons">
                    <strong>Talk To Agents</strong>
                </li>
            </ul>
        </div>

        <article class="main_article1">
            <div class="main_article1_icon">

            </div>
                  <h2 class="section_title_tips">Tips for Finding <span class="bold_emphasis"><strong>Affordable Health Insurance</strong></span></h2>
              <p>
                  It can be a daunting task to find affordable health insurance especially if you are self employed or have a family that's not covered on your health plan at work. In addition to this, if you have a pre-existing condition, you are in real trouble because in most cases it will not be covered at all. One of the best ways to get affordable health insurance is with a group plan and this is normally done through an employer. That employer generally pays some or even all of the insurance cost for the employee but the employee may choose to add a spouse or a family member at an additional cost.
              </p>
        </article>

        <article class="main_article2">
            <div class="main_article_icon2">

            </div>
            <h2 class="section_title_tips">Top <span class="bold_emphasis"><strong>Health Insurance Carriers</strong></span></h2>
            <p>
                When looking for a top health insurance carrier, you may consider looking into some big companies because they may give you the best rates. Often a larger company is capable of giving you a much better rate than smaller companies because they have more resources available to them to aid in offering better pricing. There are many large health insurance carriers to choose from in this day and age that can offer you the highest quality service at an affordable price. The key to finding one you like is to spend some time in research looking for the best carrier and then getting some quotes from them as well.            </p>
        </article>

        <div class="bottom_optin">
             <h2>Affordable Health Plans </h2>
            <form action="step-1.php" method="post" enctype="application/x-www-form-urlencoded">
                <input type="submit" value="Submit" class="footer_submit"/> <input type="text" maxlength="5" placeholder="Enter Zip" name="enter_zip_code" />

            </form>
        </div>
    </section>

<?php
require("includes/footer.php");
?>