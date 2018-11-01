<?php
error_reporting(0);
$root_url=$_SERVER['DOCUMENT_ROOT'].'/pajo/main';
//core classes
require $root_url.'/App/Core/Database.php';
require $root_url.'/App/Core/Query.php';
require $root_url.'/App/Core/Functions.php';
//end of cores
//CONTROLLERS
require $root_url.'/App/Controllers/Tables.php';
require $root_url.'/App/Controllers/Executor.php';
require $root_url.'/App/Controllers/Utility.php';
require $root_url.'/App/Core/Router.php';
require $root_url.'/App/Controllers/Login.php';
require $root_url.'/App/Controllers/User.php';
require $root_url.'/App/Controllers/Item.php';
require $root_url.'/App/Controllers/Purchase.php';
require $root_url.'/App/Controllers/Stock.php';
$router=new Router();
?>