<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body{
    margin-left:10%;
}
.container1{
    /* margin-left:10%; */
    width:40%;
    float:left;
}
.container2{
    width:40%;
    float:right;
}
.form-control{
    width:300px;
}
.confirm,.login,.password{
    /* visibility:hidden; */
    color:red;
    width:300px;
}


</style>

</head>
<body>
<?php

?>
<div class="container1">
<h2>Register</h2>
<br>
<form action="home.php" method="POST">
<div class="form-group">
<label for="name">Full Name</label>
<input class="form-control" type="text" id="name" name = "name" required>
</div>

<div class="form-group">
<label for="user-name">User Name</label>
<input class="form-control" type="text" id="user-name" name = "user-name" required>
</div>

<div class="form-group">
<label for="password">Password</label>
<input class="form-control" type="password" id="password" name = "password" required>
</div>
<?php
if(strlen($_POST["password"])<6){
    echo "<p class='password'>Password should at least consists of 6 characters</p>";
}

?>
<div class="form-group">
<label for="confirm">Confirm Password</label>
<input class="form-control" type="password" id="confirm" name = "confirm" required>
<?php
if(strcmp($_POST["password"],$_POST["confirm"])!=0){
    echo "<p class='confirm'>Username and Password doesn't match</p>";
}

?>
</div>


<div class="form-group">
<label for="email">Email</label>
<input class="form-control" type="email" id="email" name = "email" required>
</div>


<div class="form-group">
<label for="phone">Phone</label>
<input class="form-control" type="tel" id="phone" name = "phone" required>
</div>

<div class="form-group">
<label for="birthday">Birthday</label>
<input class="form-control" type="datetime" id="birthday" name = "birthday" required>
</div>


<div class="form-group">
<label for="ssn">Social security number</label>
<input class="form-control" type="number" id="ssn" name = "social" required>
</div>

<button class="btn btn-primary">Submit</button>
</form>

</div>


<div class="container2">
<h2>Login</h2>
<br>
<form method="post" action="safe.php">

<div class="form-group">
<label for="user-name">User Name</label>
<input class="form-control" type="text" id="user-name" name = "user-name" required>
</div>

<div class="form-group">
<label for="password">Password</label>
<input class="form-control" type="password" id="password" name = "password" required>
</div>

<button class="btn btn-primary">Submit</button>
</form>
<?php
if($_GET["error"]==1){
    echo "<p class='login'>Wrong Username or Password</p>";
}
?>
</div>





</body>
</html>