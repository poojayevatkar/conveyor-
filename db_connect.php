<?php
$server='localhost';
$user='root';
$pass='';
$db='conveyor';

$conn =  mysqli_connect($server,$user,$pass,$db);

if($conn === false)
{
    die("ERROR: could not connect." .mysqli_connect_error());
}

?>