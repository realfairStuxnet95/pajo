<?php 
require $_SERVER['DOCUMENT_ROOT'].'/pajo/main/class_loader.php';
$request=array_merge($_GET,$_POST);
if((isset($request['email']) && $request['email']!="") && (isset($request['password']) && $request['password']!="")){
	//clean inputs
	$email=$function->sanitize($request['email']);
	$password=$function->sanitize($request['password']);
	if(!empty($email) && !empty($password)){
		$login_status=$login->validate_login($email,$password);
		if($login_status){
			//get session data
			$sessionData=$login->session_data($email,$password);
			if (session_status() == PHP_SESSION_NONE) {
			    session_start();
			}
			foreach ($sessionData as $key => $value) {
				$_SESSION['user_id']=$value['user_id'];
				$_SESSION['user_names']=$value['names'];
				$_SESSION['user_type']=$value['type'];
			}
			echo "200";
		}else{
			echo "Invalid Email and Password!!";
		}
	}else{
		echo "Please check Submitted data";
	}
}else{
	echo "500";
}
?>