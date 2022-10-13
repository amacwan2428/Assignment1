<?php

// connection info

$servername = 'localhost'; 
$username = 'root'; 
$password = ''; 
$dbname = 'bank'; 

// Create a connection
$db = new mysqli($servername, $username, $password, $dbname);

//Check for errors
if($db->connect_error){
    die('Connection failed...');
}
else
{
    //print_r($db);
}
