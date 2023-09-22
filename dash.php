<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['date']) && isset($_SESSION['email']) && isset($_SESSION['age'])){
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
</head>
<body text="white" bgcolor="black">

<center><h2>
    <form action="dash.php" method="post">
    <h1>Welcome User</h1><br>
    Your user name :<?php echo $_SESSION['user']; ?><br>
    Your user id :<?php echo $_SESSION['id']; ?><br>
    Your registered email address : <?php echo $_SESSION['email']; ?><br>
    Your Age :<?php echo $_SESSION['age']; ?><br>
    This account registered date :<?php echo $_SESSION['date']; ?></h2><br>
    <h2><input type="submit" name="Logout" value="Logout"></h2>
    </form>


</center>
    
</body>
</html>

<?php
}
?>
<?php
if ($_POST['Logout']){
    header("Location:Home.php");
}

?>