<!DOCTYPE html>
<html>
<head>
<title>product sales</title>
<meta charset="utf-8">
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<link rel="stylesheet" type ="text/css" media="screen" href="../assets/css/productsales.css">
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
<input type = "search"  name = "search" placeholder ="search">
<button type ="button" class ="btn btn-success">search</button></span>
<a href = "#"><i style="font-size:35px; color:black;"class="fa fa-user-circle-o" aria-hidden="true"></i></a>
<span><a href="">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></span>
</header>
</div>

<div class="wrapper">
<div class="sidebar">
<ul style = "list-style:none">
<li><a href ="../view/dashboard.view.php">Dashboard</a><i style="padding-left:43px;" class="fa fa-newspaper-o" aria-hidden="true"></i></li>
<li><a href ="../view/additem.view.php">Add Item</a><i style="padding-left:55px; font-size:20px;" class="fa fa-cart-plus" aria-hidden="true"></i></li>
<li><a href ="../view/manageproduct.view.php">Manage Items</a><i style="margin-left:17px; font-size:19px;"class="fa fa-filter" aria-hidden="true"></i></li>
<li><a class="list" href ="../view/accounts.view.php">Accounts</a><i  style="padding-left:60px;"class="fa fa-calculator" aria-hidden="true"></i></li>
<li><a class="list"href ="">Contact us</a><i  style="padding-left:48px;" class="fa fa-phone-square" aria-hidden="true"></i></li>
</ul>
</div>

<div class ="main">
    <h1>PRODUCT SALES</h1>
    <form  action="../controller/product.controller.php" method="POST"> 
<label for="Item Name">Item Name</label>
<select id="Item Name" name="itemname">
<option value="">Please Choose</option>
<option value="Chair">Chair</option>
<option value="Tabel">Table</option>
<option value="Bed">Bed</option>
<option value="Door">Door</option>
<option value="Sofa">Sofa</option>
</select>     
<br><br>
<label>Item code<input style="margin-left:116px;"type ="text" name="itemcode"placeholder="Item Code"></label><br><br>
<label>Num Of Item<input style="margin-left:89px;"type ="text" name="itemquantity" placeholder="Num Of Item"></label><br><br>
<label>Total Product Sales<input style="margin-left:25px;"type="text" name="totalprice" placeholder="Total Product Sale"></label><br><br>

<button class="primary"type = "edit" name="edit">Cancle</button>
<button  class="success"type = "submit" name="submit">Save</button>
</form>
</div>
</div>

</body>
</html>