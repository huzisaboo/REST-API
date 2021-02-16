<?php
class Database
{
public	$servername = "localhost";
public	$username = "root";
public $password = "";
public $dbname = "";
public $conn;

function __construct()
{
	$this->db_connect();
	 if(!$this->conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

}
	
public function db_connect()
{
	 try{
            $this->conn = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
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