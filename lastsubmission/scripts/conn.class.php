<?php 
class conn
{
	private $server="localhost";
	private $username="root";
	private $password="";
	private $db_name="users";
	private $con;
	
	public function __construct()
	{
		
	}
	//the method creates a connection of the database called Users
	function connectLogin()
	{
		$con=mysql_connect($this->server,$this->username,$this->password) or die ("Error /...failed to Connect");
		mysql_select_db($this->db_name) or die("Error /.....cannot find the database");
		
		
		
		return $this->con;
	}
	//the method creates a connection of the database called Users
	function con()
	{
		$con=mysql_connect($this->server,$this->username,$this->passs) or die ("Error /...failed to Connect");
		mysql_select_db($this->db_name) or die("Error /.....cannot find the database");
		
		
		return $this->con;
	}
}

?>