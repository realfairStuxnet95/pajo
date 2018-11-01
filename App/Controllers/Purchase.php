<?php 

class Purchase extends Execute{

	//get available purchase
	public function get_purchases(){
		$array=array("status"=>'DELETED');
		return $this->select_except(Tables::raw_materials(),$array);
	}
}
$purchase=new Purchase();
?>