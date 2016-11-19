<?php
require("includes/header.php");
require("functions/functions.php");
require("db_connect/db_connect.php");
?>
<?php
if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['home_phone']) && !empty($_POST['address'])
    && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip_code']) && !empty($_POST['dob'])){


    $type = 35;
    $src ='HH_Internal';
    $landing_page = 'http://ezhealthinsurancehq.com/';
    $ip_address = getUserIP();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $zip_code = $_POST['zip_code'];
    $zip_code = (int)$zip_code;
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state= $_POST['state'];
    $home_phone = $_POST['home_phone'];
    $home_phone = (int)$home_phone;
    $address = $_POST['address'];
    $dob =$_POST['dob'];
    $dob= explode('-',  $dob);
    $dob =   $dob[2] .'/' .  $dob[1] .'/' .  $dob[0];
    $project_type = 'Health Insurance';

    $insert_leads = new Db_Connect();
    $insert_leads->insert_leads($first_name,$last_name,$email,$home_phone,$address,$city,$state,$zip_code,$dob);


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
            <h2>Thank you, one of our Health Insurance Specialist will contact you shortly.</h2>
        </div>


    </section>

<?php

}else{
   ?>
     Please complete all fields, and try again;
    <a href="step-1.php">Try Again</a>
   <?php
}
?>

<?php
require("includes/footer.php");
?>