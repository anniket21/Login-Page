<?php

include '../model/dbconn.php';
#print_r($_POST); exit;

if(isset($_POST['submit'])){

echo $username = mysqli_real_escape_string($conn,$_POST['uname']);
echo $password = mysqli_real_escape_string($conn,$_POST['password']);

// for username...................
if (empty($_POST['uname'])) {
    echo " fill username ";
}

if (strlen($_POST['uname'] <= 6)) {
    echo "minimum at least 6 character";
}

// for password....................

if(empty($_POST['password'])){
    echo "fill password";
}

if(strlen($_POST['password']) <=  6) {
echo "minimum at least 6 character";
} 
//insert query.........................

echo $insert_query = "insert into admin(username,password) values('$username','$password')";
$iquery = mysqli_query($conn,$insert_query);

if ($iquery){
    
    echo "succesful";
}

else {
echo "fail" ;

}

}


?>