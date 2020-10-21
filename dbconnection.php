<?php
$servername="localhost";
$username="root";
$password="";
$database="sparkbank";

$db_handler=mysqli_connect($servername,$username,$password,$database);

if($db_handler){
}

else{
	echo "Error In Connection to Database";
	die("Check: ".mysqli_connect_error());
}

?> 
