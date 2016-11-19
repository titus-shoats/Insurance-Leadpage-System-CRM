<?php
require("includes/header.php");
?>

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


            <div class="intro_form_footer">


                <input type="submit" value="Start Now" class="continue_btn"  disabled/>
            </div>
        </form>
         <div class="faq_container">
             <h2 class="faq_questions">FAQ</h2>
             <p class="faq_ans">
                 Below are answers to some of the more frequently asked questions we receive.
             </p>
             <h2 class="faq_questions">How does this service work?</h2>
             <p class="faq_ans">
                 Healthy Insurance Quotes has a large network of licensed insurance agents across the US. Once you have submitted your information to our system, Healthy Insurance Quotes may instantly match you with local agents in your area. Those agents will run free insurance quotes for you and provide those quotes via the information you have provided. This process may save you time and money because you can compare rates from multiple companies without having to contact numerous agents and provide your information several times.
                 Any agents that our system matches you with may provide you free insurance quotes for you with no obligation on your part. You can choose to receive these quotes either via email or over the phone – which means you can start receiving insurance quotes in a short amount of time.
             </p>

             <h2 class="faq_questions">Is Healthy Insurance Quotes an insurance company?
             </h2>
             <p class="faq_ans">
                 No, we are not an insurance company. We are a free referral service for insurance shoppers. We do not have information on your existing insurance policies, claims, etc. If you have a question regarding an existing or previous policy, please contact your agent or carrier directly.
             </p>

             <h2 class="faq_questions">I have already submitted my information, when may I get my quote?
             </h2>
             <p class="faq_ans">
                 The agents who receive your request may usually begin running your insurance quotes immediately, and may often provide detailed pricing information within minutes. However, some insurance quotes are more complicated and may require a little more time to process. Regardless, you should always receive your online insurance quotes within 48 hours at most.
             </p>

             <h2 class="faq_questions">How do I get an insurance quote?
             </h2>
             <p class="faq_ans">
                 To get a free, no-obligation insurance quote, just go to the top of the page, enter your zip code, select the type of insurance for which you want a quote, then click "GO."
             </p>

             <h2 class="faq_questions">Is Healthy Insurance Quotes affiliated with any insurance companies?
             </h2>
             <p class="faq_ans">
                 No, we are not directly affiliated with any insurance companies. Insurance agents who directly represent many insurance companies are part of our nationwide network.
             </p>

             <h2 class="faq_questions">How does getting a bunch of insurance quotes online help me?
             </h2>
             <p class="faq_ans">
                 Just like anything else you buy, insurance is a product that varies widely from provider to provider. Like stereos or computers, finding an insurance policy that provides everything you need – and nothing you don’t – requires taking the time to make comparisons.
             </p>
         </div>


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