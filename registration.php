<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER REGISTER FORM</title>
</head>
<body text="white" bgcolor="black"><center>
    <form action="registration.php" method="post">
        <h1>User Register Here..<h1>
        <h3>Username</h3><input type="text" name="username"placeholder="Username">

        <h3>Email</h3><input type="email" name="email" placeholder= "Email Address">

        <h3>Age</h3><input type="number" name="age" default= "19"placeholder= "Age">
        
        <h3>Password</h3><input type="password" name="password" placeholder = "Password"><br>
        
        <h2><input type="submit" name="Register" value="Register"></h2>
        
        <h2><input type="submit" name="login" value="I Already Have Account"></h2>

    </form></center>   
</body>
</html>


<center><?php
include("database.php");

if($_POST["Register"]){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $hash = password_hash($password , PASSWORD_DEFAULT);
} 


$sql = "INSERT INTO users (user, password, email, age)
        VALUES ('$username', '$password','$email','$age')";

if(empty($username)){
    echo "ENTER YOUR USER NAME";
}
elseif(empty($email)){
    echo "ENTER YOUR EMAIL";
}
elseif(empty($age)){
    echo "ENTER YOUR AGE";
}
elseif(empty($password)){
    echo "ENTER YOUR PASSWORD";
}
else{
    try{
        mysqli_query($mysqli, $sql);
        echo "USER ACCOUNT WAS REGISTERED";
        header("Location: login.php");
    }
    catch(mysqli_sql_exception){
        echo "<br>CHECK YOUR USERNAME OR EMAIL IT'S ALREADY TAKEN<br>";
    }
}
if ($_POST['login']){
    header("Location:login.php");
}


?></center>