<?php
require("includes/header.php");
require("functions/functions.php");
?>

<?php
if(!empty($_POST['unsubscribe'])){

   if(is_file('unsubs.txt')){


       file_put_contents('unsubs.txt',$_POST['unsubscribe'].PHP_EOL,FILE_APPEND);
   }



   ?>
    <section class="content confirm_container">
        <div class="contact_top_container">

            <ul class="contact_top_nav_ul">
                <li id="contact_top_nav_quotes" class="contact_top_nav_li ">
                    <h2> <span class="logo_text1"><strong>Healthy Insurance</strong></span> <span class="logo_text2"><strong>Quotes</strong></span></h2>
                </li>

            </ul>
        </div>

        <div class="confirm_text">
            <h2>Thank you, you have successfully unsubscribed from our mailing list.</h2>
        </div>


    </section>
   <?php


}else{
    ?>
    Please complete all fields, and try again;
    <a href="unsubscribe.php">Try Again</a>
<?php
}
?>

<?php
require("includes/footer.php");
?>