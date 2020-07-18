<?php

	$host="localhost";
	$uname="root";
	$pass="";
	$db="sunrise_hotel";
	

	$conn = new mysqli($host,$uname,$pass,$db);

	// Check connection
	if ($conn -> connect_errno) 
	{
		echo "Failed to Connect in DataBase : " . $conn -> connect_error;
  		exit();
	}

/*
class DB
{
  
    private $host = "localhost";
    private $db_name = "sunrise_hotel";
    private $username = "root";
    private $password = "";
    public $conn;
	
	function __construct()
	{
		$this->conn=$this->getConnection();
	}
  
    public function getConnection()
	{  
        $this->conn = null;  
        try
		{
            $this->conn = new mysqli($this->host,$this->username,$this->password,$this->db_name);
        }
		catch(Exception $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
*/
?>
