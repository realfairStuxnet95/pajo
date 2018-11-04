<?php 
require $_SERVER['DOCUMENT_ROOT'].'/pajo/main/class_loader.php';
$success="200";
$error="403";
$forbidden='500';
if(isset($_POST['input'])){
	if(is_array($_POST['input'])){
		$input=$_POST['input'];
		//get action
		$action=$function->sanitize($input[0]);
		if($action=='save_user'){
			//grab inputs
			$names=$function->sanitize($input[1]);
			$email=$function->sanitize($input[2]);
			$phone=$function->sanitize($input[3]);
			$password=$function->sanitize($input[6]);
			$category=$function->sanitize($input[5]);
			$gender=$function->sanitize($input[4]);
			$save_status=$user->save_user($names,$email,$phone,$password,$category,$gender);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}
	}else{
		echo $forbidden;
	}
}else{
	echo $forbidden;
}
?>