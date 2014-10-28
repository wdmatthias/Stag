<?php
function Get_Database_Connection($DB_NAME) {
		$Connection = mysql_connect('localhost:3306','root',''); //Please Change the login details for your SQL Server
		if (mysqli_connect_errno()) {
			Output ('Failed to connect to MySQL: ' . mysqli_connect_error());
		}
		$DB = mysql_select_db($DB_NAME);
		if (!$DB) {
			die('Database not found!-Please Contact your Administrator');
		}
		return $DB;
	}
?>