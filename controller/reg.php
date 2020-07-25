<?php
include 'dbconn.php';

if (isset($_POST['submit']));

$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
$email   = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$confirm_password = mysqli_real_escape_string($conn,$_POST['confirmpass']);

//validation for registration.....................

// for first name................................... 
if(empty($POST['firstname'])){
    echo "fill first name";
}

if (strlen($POST['firstname'] <= 5)) {
 echo "fill at least 5 character"; 
}

//for last name..........................................
if(empty($POST['lastname'])){
    echo "fill last name";
}

if (strlen($POST['lastname'] <=5))

// for email.............................................
if(empty($POST['email'])){
    echo "fill email ";
}

// for password.........................................
if(empty($POST['password'])){
    echo "fill password";
}
// for confirmpassword
if(empty($POST['confirmpass'])){
    echo "fill confirm password";
}

if ($confirm_password != $password){
    echo "enter correct password";
}
// insert query for registration........

echo $insert_query = "insert into user (firstname,lastname,email,password,confirmpass) values
('$firstname','$lastname','$email','$password','$confirm_password')";

$iquery = $insert_query($conn,$insert_query);

if ($iquery){
    echo "registration successful";
}
else 
echo "registration fail";

























?>