<!DOCTYPE html>
<html>
<head>
<title>ACCOUNTS</title>
<meta charset="utf-8">
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<link rel="stylesheet" type ="text/css" media="screen" href="../assets/css/accounts.css">
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

<div class ="main">
<h1>PROFIT AND LOSS</h1>

<form action="../controller/accounts.controller.php" method="POST">
<label for="Item Name">Item Name
<select id="Item Name" name="itemname">
<option value="">Please Choose</option>
<option value="Chair">Chair</option>
<option value="Tabel">Table</option>
<option value="Bed">Bed</option>
<option value="Door">Door</option>
<option value="Sofa">Sofa</option>
</select>
</label>
<br><br> 
<label for="Cost Price">Cost Price<input style="margin-left:70px;" type="text" name="costprice" placeholder="COST PRICE"></label>
<br><br>
<label for="Discount">Discount<input style="margin-left:81px;" type="text" name="discount" placeholder="DISCOUNT"></label>
<br><br>
<label for="Profit/Losst">Profit / Loss<input style="margin-left:55px;" type="text" name="profit_loss" placeholder="Profit / Loss"></label>
<br><br>
<button type="submit" name="submit" value="submit" >submit</button>
</form>
</div>