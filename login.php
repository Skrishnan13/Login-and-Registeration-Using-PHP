<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN HERE</title>
</head>
<body text="white" bgcolor="black"><center>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <h3><input type="text" name="username" placeholder="Username"><br></h3>
        <h3><input type="password" name="password" placeholder="Password"><br></h3>
        <h3><input type="submit" value="Login" name="login"><br></h3>
        <h3><input type="submit" value="New Register" name="reg"></h3>
  </form>
</center></body>
</html>

<?php

include("database.php");

session_start();

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE user='$username' AND password='$password'";

    $result = mysqli_query($mysqli,$sql);

    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_assoc($result);
        if($row['user']===$username && $row['password']===$password){
            $_SESSION['user']=$row['user'];
            $_SESSION['id']=$row['id'];
            $_SESSION['date']=$row['date'];
            $_SESSION['email']=$row['email'];
            $_SESSION['age']=$row['age'];
            header("Location:Dash.php");
            exit();

        }
    }
    else{
        echo "you have to SignUp";
        }
}
if ($_POST['reg']){
    header("Location:registration.php");
}

?>