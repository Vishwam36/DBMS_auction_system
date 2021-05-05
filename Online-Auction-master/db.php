<?php
// $con = new mysqli($servername, $username, $password, $dbname);
$con = new mysqli('localhost','root','','online-auction-master');

if ($con->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('asia/kolkata');
 ?>