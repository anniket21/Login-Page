<?php 
include '../model/dbconn.php';
#print_r($_POST); exit;

if (isset($_POST['submit'])){
$Date = mysqli_real_escape_string($conn,$_POST['date']);
$Item_Name = mysqli_real_escape_string($conn,$_POST['itemname']);
$Item_Code = mysqli_real_escape_string($conn,$_POST['itemcode']);
$Item_Quantity = mysqli_real_escape_string($conn,$_POST['itemquantity']);
$Item_Discount = mysqli_real_escape_string($conn,$_POST['itemdiscount']);
$Item_Price = mysqli_real_escape_string($conn,$_POST['itemprice']); 
$Item_Total_Price = mysqli_real_escape_string($conn,$_POST['totalprice']);


echo $insert_query = "insert into additem(Date,Item_Name,Item_Code,Item_Quantity,Item_Discount,Item_Price,Item_Total_Price) 
values ('$Date','$Item_Name','$Item_Code',$Item_Quantity,$Item_Discount,$Item_Price,$Item_Total_Price)";

$iquery = mysqli_query($conn,$insert_query);


if ($iquery){
    echo "successful";
}

else{
    echo"fail".mysqli_error($conn);
}


}

















?>