<?php 
class Item extends Execute{

	//get all items categories
	public function get_item_categories(){
		return $this->select_all(Tables::items_categories(),"name",30);
	}
	//save item category
	public function save_category($name,$unit_price,$image){
		$array=array("name"=>$name,"image"=>$image,"status"=>'ACTIVE',"unit_price"=>$unit_price);
		$status=$this->multi_insert(Tables::items_categories(),$array);
		return $status;
	}
}
$item=new Item();
?>