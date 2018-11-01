<?php 
require 'class_loader.php';
//echo $util->field_query(Tables::users(),"user_id",2,"names");
echo $util->field_sum(Tables::stock(),"quantity","product_id",3);
?>