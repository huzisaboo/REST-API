<?php
class Database
{
public	$servername = "localhost";
public	$username = "root";
public $password = "";
public $dbname = "api_database";
public $conn;

function __construct()
{
	$this->conn = $this->db_connect();
	 if(!$this->conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

}
	
public function db_connect()
{
	 $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
	 return $conn;
  }

public function get_connection()
{
	return $this->conn;
}

public function close_connection()
{
	mysqli_close($this->conn);
}
}

?>