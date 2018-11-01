<?php 

class Utility extends Query{
	
	public function field_query($table,$id_field,$id_value,$field_name){
		$result="";
		$query="SELECT ".$field_name." FROM ".$table." WHERE ".$id_field."=".$id_value;
		$output=$this->select($query);
		foreach ($output as $key => $value) {
			$result=$value[$field_name];
		}
		return $result;
	}

	public function field_sum($table,$field,$clause_name,$clause_value){
		$query="SELECT SUM(".$field.") FROM ".$table." WHERE ".$clause_name."=".$clause_value;
		$result=$this->select($query);
		$output=0;
		foreach ($result as $key => $value) {
			$output=(int)$value['SUM('.$field.')'];
		}
		return $output;
	}
	public function records_counter($table){
		$query="SELECT DISTINCT * FROM ".$table." WHERE status!='DELETED'";
		$num=$this->rows($query);
		return $num;
	}
}
$util=new Utility();
?>