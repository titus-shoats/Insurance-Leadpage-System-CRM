<?php
require("../db_connect/db_connect.php");

$fetch_leads = new Db_Connect();
$get_leads = $fetch_leads->fetch_leads();

if(!empty($_POST['id'])){
    $fetch_leads->delete_leads($_POST['id']);
    echo $_POST['id'];
    ?>

<?php
}else{
    echo "Error in Posting Leads.";
}