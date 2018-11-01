<?php 

class User extends Execute{
	//get system suppliers
	public function get_suppliers(){
		$array=array("status"=>'DELETED');
		return $this->select_except(Tables::suppliers(),$array);
	}
	//select all system users
	public function get_users($table,$order_by,$limit){
		$array=array("status"=>'DELETED');
		return $this->select_except(Tables::users(),$array);
	}
	public function check_user_email($email){
		$array=array("email"=>$email);
		$number=$this->multi_counter(Tables::users(),$array);
		if($number>0){
			return true;
		}else{
			return false;
		}
	}
	public function check_user_phone($phone){
		$array=array("phone"=>$phone);
		$number=$this->multi_counter(Tables::users(),$array);
		if($number>0){
			return true;
		}else{
			return false;
		}
	}
	public function check_user_id($user_id){
		$array=array("user_id"=>$user_id);
		$number=$this->multi_counter(Tables::users(),$array);
		if($number>0){
			return true;
		}else{
			return false;
		}
	}
	//function to remove user
	public function remove_user($user_id){
		$array=array("status"=>'DELETED');
		$where=array("user_id"=>$user_id);
		$result=$this->query_update(Tables::users(),$where,$array);
		return $result;
	}
	//saved user information
	public function save_user($names,$email,$phone,$password,$category,$gender){
		$array=array("names"=>$names,"email"=>$email,"password"=>$password,"type"=>$category,"status"=>'ACTIVE',"gender"=>$gender,"verified"=>1,"phone"=>$phone);
		$status=$this->multi_insert(Tables::users(),$array);
		return $status;
	}
	public function save_supplier($names,$email,$phone,$tin,$address){
		$array=array("names"=>$names,"email"=>$email,"phone"=>$phone,"tin"=>$tin,"address"=>$address,"status"=>'ACTIVE');
		$status=$this->multi_insert(Tables::suppliers(),$array);
		return $status;
	}
}
$user=new User();
?>