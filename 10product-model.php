<?php
require_once './MySQLDB.class.php';
require_once 'BaseModel.php';

class ProductModel extends BaseModel
{
	function GetAllProduct(){
		$sql = "select * from product";
		$result = $this->db->GetRows($sql);
		return $result;
	}

	function GetCount(){
		$sql = "select count(*) as c  from product";
		$result = $this->db->GetOneData($sql);
		return $result;
	}
}