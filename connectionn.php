<?php
class connectionn
{
 
	var $host = 'localhost';
	var $uname = 'id13979892_admin';
	var $pass = 'Br16101996fiah!';
	var $dbname = 'id13979892_utspemweb	';
	var $conn;
 
	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->dbname);
	}
	function insertdata($n, $e, $s, $l){
		$get_user = mysqli_query($this->conn,'select max(no_user) as usr from user');
		$user = mysqli_fetch_array($get_user);
		$new_user= $user['usr'] +1;
		$db = "insert into user values('$new_user', '$n','$e','$s','$l')";
		mysqli_query($this->conn, $db);
	}
} 