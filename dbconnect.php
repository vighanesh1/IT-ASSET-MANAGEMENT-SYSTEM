<?php
$servername ="localhost";
$username ="root";
$password = "";
$dbname = "system_details";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "connection established";
}
else
{
	echo "connection failed";

}