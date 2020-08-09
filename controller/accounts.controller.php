<?php
include '../model/dbconn.php';
#print_r($_POST); exit;
if (isset($_POST['submit'])) 

$Item_Name = mysqli_real_escape_string($conn,$_POST['itemname']);
$Cost_Price = mysqli_real_escape_string($conn,$_POST['costprice']);
$Discount = mysqli_real_escape_string($conn,$_POST['discount']);
$Profit_Loss = mysqli_real_escape_string($conn,$_POST['profit_loss']);



echo$insert_query = "insert into accounts(Item_Name,Cost_Price,Discount,Profit_Loss) values 
('$Item_Name',$Cost_Price,$Discount,$Profit_Loss)";

$iquery = mysqli_query($conn,$insert_query);

if ($iquery){
    echo "connected";
}

else{
    echo "false".mysqli_error($conn);
}













?>