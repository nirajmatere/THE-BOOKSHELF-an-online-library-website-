<?php

$DB_SERVER='localhost';
$DB_USERNAME='root';
$DB_PASSWORD='';
$DB_NAME = "my_db";

/* Attempt to connect to MySQL database */
$link = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
//$conn=mysqli_connect($servername,$username,$password,"$dbname");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>