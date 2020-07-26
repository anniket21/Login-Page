
<?php  include "log.php";  ?>
<?php  include "dbconn";   ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>register form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../assets/css/login.css'>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
   
    <div class ="form1">
    <form action ="log.php" method ="POST">
        <h1 style ="margin-left: 130px;padding-bottom:9px;color:black;">admin login</h1>
     
        <label style="font-size:18px;color:black";>username</label>   
     <input type ="text" name ="username"   placeholder="username">
    <br>

    <br>
    
     <label style="font-size:18px;color:black";>password</label>
     <input type ="text" name ="password"  placeholder="password">
     <br>
     <br>
     <button class="btn btn-primary" style = "margin-left:110px"; type ="cancel">cancel</button> 
     <button class="btn btn-success" style = "margin-left:auto"; type ="submit">submit</button>
    </form>
     </div>
     <br>
     <br>
     
     <a href=""; style="margin-left:550px; color:black ;font-size:20px;";>forget password ?</a>
     <hr></hr>
     <a href ="./registration.php";  style="margin-left:550px; color:black ;font-size:20px;";>create new account..</a>
    
</body>
</html>