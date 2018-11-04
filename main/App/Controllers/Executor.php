<?php 
class Execute extends Query{
	private $executeArray=array();
	private $allowedTable=array("system_users","patients","patient_info","medical_records","");
	private $id_fields=array("recordId","patientId","infoId","userId");
	private $field_names=array("userId","userCode","hospitalId","email","password","Names","type","isOnline","status","regDate","recordId","patientId","doctorId","hospitalId","title","diagnosized","consultation","medics","labTest","status","isArchived","regDate");
	private $allowedOptions=array("SELECT","UPDATE","INSERT","DELETE");
	//field query
	public function field_query($table,$id_field,$id_value,$field_name){
		$result="";
		$query="SELECT ".$field_name." FROM ".$table." WHERE ".$id_field."=".$id_value;
		$output=$this->select($query);
		foreach ($result as $key => $value) {
			$result=$value[$field_name];
		}
		return $result;
	}
	//select all
	public function select_all($table,$order_by,$limit){
		$query="SELECT * FROM ".$table." ORDER BY ".$order_by." LIMIT ".$limit;
		$result=$this->select($query);
		return $result;
	}
	public function multi_insert($table,$array){
		$status=false;
		$query='';
		if(is_array($array)){
			$query="INSERT INTO ".$table."(";
			$i=0;
			foreach ($array as $key => $value) {
				$query.=$key;
				if($i<(count($array)-1)){
					$query.=",";
				}
				$i++;
			}
			$query.=") VALUES(";
			$j=0;
			foreach ($array as $key => $value) {
				$query.="\"$value\"";
				if($j<(count($array)-1)){
					$query.=",";
				}
				$j++;
			}
			$query.=")";
		}
		$status=$this->insert($query);
		return $query;
	}
	public function query_update($table,$where,$array){
		$status=false;
		$query='';
		if(is_array($array)){
			$query="UPDATE ".$table." SET ";
			$i=0;
			foreach ($array as $key => $value) {
				$query.=$key;
				$query.="=\"$value\"";
				if($i<(count($array)-1)){
					$query.=",";
				}
				$i++;
			}
			$query.=" WHERE ";
			$j=0;
			foreach ($where as $key => $value) {
				$query.=$key;
				$query.="=\"$value\"";
				if($j<(count($where)-1)){
					$query.="AND";
				}
				$j++;
			}
		}else{

		}
		$status=$this->update($query);
		return $status;
	}
	public function select_multi_clause($table,$credentials){
		$output=array();
		if(is_array($credentials)){
			$query="SELECT *";
			$query.=" FROM ".$table." WHERE ";
			$j=0;
			foreach ($credentials as $key => $value) {
				$query.=$key.'='."\"".$value."\"";
				if($j<(count($credentials)-1)){
					$query.=" AND ";
				}
				$j++;
			}
			
			//$output=$query;
			$output=$this->select($query);
			return $output;
		}else{
			return "INVALID INPUTS";
		}
	}
	public function select_except($table,$credentials){
		$output=array();
		if(is_array($credentials)){
			$query="SELECT *";
			$query.=" FROM ".$table." WHERE ";
			$j=0;
			foreach ($credentials as $key => $value) {
				$query.=$key.'!='."\"".$value."\"";
				if($j<(count($credentials)-1)){
					$query.=" AND ";
				}
				$j++;
			}
			
			//$output=$query;
			$output=$this->select($query);
			return $output;
		}else{
			return "INVALID INPUTS";
		}
	}
	public function multi_select($table,$credentials){
		$output=array();
		if(is_array($credentials)){
			$query="SELECT ";
			$i=0;
			foreach ($credentials as $key => $value) {
				$query.=$key;
				if($i<(count($credentials)-1)){
					$query.=",";
				}
				$i++;
			}
			$query.=" FROM ".$table." WHERE ";
			$j=0;
			foreach ($credentials as $key => $value) {
				$query.=$key.'='."\"".$value."\"";
				if($j<(count($credentials)-1)){
					$query.=" AND ";
				}
				$j++;
			}
			
			//$output=$query;
			$output=$this->select($query);
			return $output;
		}else{
			return "INVALID INPUTS";
		}
	}
	public function multi_counter($table,$credentials){
		$output=0;
		if(is_array($credentials)){
			$query="SELECT ";
			$i=0;
			foreach ($credentials as $key => $value) {
				$query.=$key;
				if($i<(count($credentials)-1)){
					$query.=",";
				}
				$i++;
			}
			$query.=" FROM ".$table." WHERE ";
			$j=0;
			foreach ($credentials as $key => $value) {
				$query.=$key.'='."\"".$value."\"";
				if($j<(count($credentials)-1)){
					$query.=" AND ";
				}
				$j++;
			}
			
			//$output=$query;
			$output=$this->rows($query);
			return $output;
		}else{
			return "INVALID INPUTS";
		}
	}
	public function records_counter($table){
		$query="SELECT DISTINCT * FROM ".$table;
		$num=$this->rows($con,$query);
		return $num;
	}
	// new functions implemented +++++++++++++++++++++++++++++++++++++++++++++++++
	public function selecting($query){
		return $this->select($query);
	}
	public function updating($query){
		return $this->update($query);
	}
	public function inserting($query){
		return $this->insert($query);
	}
}
?>