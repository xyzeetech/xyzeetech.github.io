<?php
//Database configuration
$dbHost = 'localhost:3306';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'startup';

//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($db->connect_errno){
    die('Connect error:'.$db->connect_error);
}
else{
	echo "Connect sucessful";
}

?>