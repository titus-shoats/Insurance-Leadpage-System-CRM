<?php
require("includes/header.php");
?>


    <form  id="unsubscribe" class="unsubscribe" action="process-unsubs.php" enctype="application/x-www-form-urlencoded" method="post">




        <p>Enter your email to unsubscribe from our Email List</p>
        <p>You Will be Unsubscribed. Please Alllow up to 10 Days for Processing</p>
        <div class="intro_form_footer form-group ">


            <input type="text" value="" name="unsubscribe" />
            <input type="submit" value="Unsubscribe" class="unsubscribe_btn" disabled  />
        </div>
    </form>

    <div class="bottom_optin">
        <h2>Affordable Health Plans </h2>
        <input type="submit" value="Submit" class="footer_submit"/> <input type="text" name="bottom_optin" />
    </div>
    </section>

<?php
require("includes/footer.php");
?>