<?php
include '../model/dbconn.php';


if (isset($_POST['submit']))

$Item_Name=mysqli_real_escape_string($conn,$_POST['itemname']);
$Item_Code=mysqli_real_escape_string($conn,$_POST['itemcode']);
$Num_of_Item=mysqli_real_escape_string($conn,$_POST['itemquantity']);
$Total_Product_Sale=mysqli_real_escape_string($conn,$_POST['totalprice']);

echo $insert_query="insert into psales (Item_Name,Item_Code,Num_of_Item,Total_Product_Sale) values
('$Item_Name','$Item_Code',$Num_of_Item,$Total_Product_Sale)";

$iquery = mysqli_query($conn,$insert_query);

if($iquery){
    echo"successful";
}
else{
  echo  "fail".mysqli_error($conn);
}


$iquery = mysqli_query($conn,$insert_query);



?>