<?php
$mysql_host= 'localhost';
$mysql_user= 'root';
$mysql_pass= "";
$mysql_db= "abc";

$connection = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass);
if(!$connection || !@mysqli_select_db($connection,$mysql_db))
{
	echo "Error..couldn't connect to the database!";
 	die(mysqli_error($connection));
}

?>