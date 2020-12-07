<?php
	function connect(){
		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "klongarang2";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
	}

	function getHello($name){
		return 'Hello ! '.$name;
		}

?>