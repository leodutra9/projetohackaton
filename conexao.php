<?php
	function conecta(){
    $servername = "localhost";
    $database = "hack";
    $username = "root";
    $password = "root";
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
          die("" . mysqli_connect_error());
    }
     
    echo "";
		return $conn;
	}
	
?>