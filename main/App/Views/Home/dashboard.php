<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/pajo/main/class_loader.php';
require_once $root_url.'/App/Views/Utils/auth.php';
$user_type=$_SESSION['user_type'];
if($user_type=='ADMIN'){
    include 'admin_summary.php';
}elseif($user_type=="STOCK"){
    echo "Welcome to our Dashboard.";
}
?>
