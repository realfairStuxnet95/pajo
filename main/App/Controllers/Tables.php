<?php 

class Tables{
	public function items_categories(){
		return "items_categories";
	}
	public function users(){
		return "system_users";
	}
	public function raw_materials(){
		return 'raw_materials';
	}
	public function stock(){
		return 'inventory';
	}
	public function stock_logs(){
		return 'inventory_logs';
	}
	public function suppliers(){
		return 'suppliers';
	}
}
$table=new Tables();
?>