<?php 
include ('../model/dbconn.php');

//for submit..........................

if (isset($_POST['submit'])){


$Item_Name= mysqli_real_escape_string($conn,$_POST['itemname']);
$Item_Code = mysqli_real_escape_string($conn,$_POST['productcode']);
$Item_Quantity= mysqli_real_escape_string($conn,$_POST['itemquantity']);
$Item_Discount =mysqli_real_escape_string($conn,$_POST['itemdiscount']);
$Item_Price =mysqli_real_escape_string($conn,$_POST['itemprice']);
$Item_Total_Price =mysqli_real_escape_string($conn,$_POST['totalprice']);

echo $insert_query = "insert into mproduct(Item_Name,Item_Code,Item_Quantity,
Item_Discount,Item_Price,Item_Total_Price) values
('$Item_Name','$Item_Code',$Item_Quantity,$Item_Discount,$Item_Price,$Item_Total_Price)";

$iquery = mysqli_query($conn,$insert_query);

if($iquery){
    echo "successful";
}
else{
    echo "fail" .mysqli_error($conn);
}

}

// for delete.............................

if (isset($_POST['delete'])){

$Item_Name= mysqli_real_escape_string($conn,$_POST['itemname']);
$Item_Code = mysqli_real_escape_string($conn,$_POST['productcode']);
$Item_Quantity= mysqli_real_escape_string($conn,$_POST['itemquantity']);
$Item_Discount =mysqli_real_escape_string($conn,$_POST['itemdiscount']);
$Item_Price =mysqli_real_escape_string($conn,$_POST['itemprice']);
$Item_Total_Price =mysqli_real_escape_string($conn,$_POST['totalprice']);
    
 echo $delete_query = "DELETE FROM mproduct  WHERE
(Item_Name='$Item_Name'and Item_Code='$Item_Code'and Item_Quantity=$Item_Quantity
and Item_Discount=$Item_Discount and Item_Price=$Item_Price and Item_Total_Price=$Item_Total_Price)";

$dquery = mysqli_query($conn,$delete_query);

if($dquery){
    echo "deleted";
}
else{
  echo "not deleted".mysqli_error($conn);
}


}


/// for update..................


if (isset($_POST['update'])){


    $Item_Name= mysqli_real_escape_string($conn,$_POST['itemname']);
    $Item_Code = mysqli_real_escape_string($conn,$_POST['productcode']);
    $Item_Quantity= mysqli_real_escape_string($conn,$_POST['itemquantity']);
    $Item_Discount =mysqli_real_escape_string($conn,$_POST['itemdiscount']);
    $Item_Price =mysqli_real_escape_string($conn,$_POST['itemprice']);
    $Item_Total_Price =mysqli_real_escape_string($conn,$_POST['totalprice']);


    $update = " UPDATE  mproduct SET 
    item_Name = '$Item_Name' ,
     Item_Code = '$Item_Code'  ,
    Item_Quantity =$Item_Quantity , 
    Item_Discount =$Item_Discount ,
    Item_Price = $Item_Price ,
    Item_Total_Price =$Item_Total_Price   

      WHERE  

























}

































?>