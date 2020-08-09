<?php include ('../controller/allitems.controller.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>production</title>
<meta charset="utf-8">
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<link rel="stylesheet" type ="text/css" media="screen" href="../assets/css/allitems.css">
<meta name="viewport" content ='width = device-width, initial-scale=1'> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body style =" background-color:black";>
<div class="navbar"> 
<header>  
<a class="back"; href="../view/dashboard.view.php" ><i style ="font-size:25px;color:black;"; class="fa fa-arrow-left" aria-hidden="true"></i></a>
 <input type = "search"  name = "search" placeholder ="search">
<button type ="button" class ="btn btn-success">search</button></span>
<a href = "#"><i style="font-size:35px; color:black;"class="fa fa-user-circle-o" aria-hidden="true"></i></a>
<span><a href="">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></span>
</header>
</div>


<table class= "table table-stripped  table-bordered">
   
       <tr>
       <th>item name</th>
       <th>item code</th>
       <th>item quantity</th>
       <th>item discount</th>
       <th>item price</th>
       <th>item total price</th>
       
       </tr>

         
         <?php while($items = mysqli_fetch_assoc($squery)){

?>
         <tr>
          <td style="color:lawngreen;"><?php echo $items ['Item_Name']; ?></td>
          <td style="color:lawngreen;"><?php echo $items ['Item_Code']; ?></td>
          <td style="color:lawngreen;"><?php echo $items ['Item_Quantity'];?></td>
          <td style="color:lawngreen;"><?php echo $items ['Item_Discount']; ?></td>
          <td style="color:lawngreen;"><?php echo $items ['Item_Price'];?></td>
          <td style="color:lawngreen;"><?php echo $items ['Item_Total_Price'];?></td>
         </tr>
       <?php
         }
?>
          

</table>




</body>
</htm>