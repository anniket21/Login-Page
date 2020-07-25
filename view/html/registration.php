<?php include "reg.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>admin login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='registration.css'>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <h1>Registration form</h1>

<div class ="reg1">
    <form action="reg.php" method = "POST">
    
        <label>first name</label>
    <input  type ="firstname" name="firstname" placeholder="first name">
    <br>
    <br>
    <label>last name</label>
    <input type ="text" name="lastname" placeholder="last name">
    <br>
    <br>
    <label>email</label>
    <input type ="email" name="email" placeholder="email">
    <br>
    <br>
    <label>password</label>
    <input type ="password" name="password" placeholder="password">
    <br>
    <br>
    <label>confirm password</label>
    <input type ="confirm password" name="confirmpass" placeholder ="confirm password"> 
    <br>
    <br>
    <button class="btn btn-primary" type="reset" name ="reset" value ="reset">reset</button>
    <button class="btn btn-success" type="submit" name ="submit" value ="submit">submit</button>
    </form>
</div>
<hr></hr>
<a style="color:black;margin-left:570px; font-size:20px ;" href="login.html";>login into dashboard </a>

</body>
</html>