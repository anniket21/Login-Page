<?php 

//db conn--------
$dbserver_name ='localhost';
$dbpassword ='root';
$dbuser_name ='root';
$dbname ='admin';

$conn = mysqli_connect($dbserver_name,$dbpassword,$dbuser_name,$dbname);

if(!$conn){
die ("connection_failed : mysqli_connect_error() ");
    
}
echo "connect succesfully";




?>