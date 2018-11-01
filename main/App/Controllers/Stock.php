<?php 

class Stock extends Execute{

	//function to save stock
	public function save_stock($product_id,$quantity){
		$array=array("product_id"=>$product_id,"quantity"=>$quantity,"status"=>'ACTIVE');
		$status=$this->multi_insert(Tables::stock(),$array);
		return $status;
	}
	//function to save inventory log
	public function save_inventory_log($log_date,$activity,$user_id){
		$array=array("log_date"=>$log_date,"activity"=>$activity,"status"=>'UNREAD','user_id'=>$user_id);
		$status=$this->multi_insert(Tables::stock_logs(),$array);
		return $status;
	}
	public function get_inventory_logs(){
		$array=array("status"=>'DELETED');
		return $this->select_except(Tables::stock_logs(),$array);
	}
	//get available stock
	public function get_available_stock(){
		$array=array("status"=>'DELETED');
		return $this->select_except(Tables::stock(),$array);
	}
}
$stock=new Stock();
?>