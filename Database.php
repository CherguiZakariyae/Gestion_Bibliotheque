<?php
include_once("MySQLDataSource.php");
class DataBase
	{
		private $datasource;
		private $db;
		public function __construct($datasource)
		{
			$this->datasource=$datasource;
		}
		public function Open()
		{
			$this->db=new PDO("mysql:host=".$this->datasource->__getServername().";dbname=".$this->datasource->__getDbname()."","".$this->datasource->__getUser()."","".$this->datasource->__getPassword()."");
		}
		public function execc($Query)
		{
			return $this->db->exec($Query);
		}
		public function select($Query)
		{
			return $this->db->query($Query);
		}
		public function select_by_key($table,$key,$value)
		{
			return $this->db->query("select * from $table where $key='$value'");
		}
		public function deleteByKey($table,$key,$value)
		{
			return $this->db->exec("delete from $table where $key='$value'");
		}
	}
?>