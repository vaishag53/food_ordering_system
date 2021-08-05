<?php 

$servername="localhost";
$username="root";
$password="root";
$dbname="vsv";
#To create a connection with db
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());
	echo "failed";
}