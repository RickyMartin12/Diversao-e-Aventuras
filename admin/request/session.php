<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');


require_once '../connect.php';


session_start();
if(!isset($_COOKIE['name'])) {
    header("Location:login.php");
}


else{
    

//unset($_POST);


?>
<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
<style>
    
    #content_info
    {
        display: block!important;
    }
</style>

<?php





?>

<?php

  }

?>


