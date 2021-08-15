
<?php
if (isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

if($username=='shamali' && $password=='pass'){
    echo "Login Successful";
}else{
    echo "Invalid username or password";
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <form action="login.php" method="post">
        username:<input type="text" name="username" id=""><br>
        password:<input typr="password" name="password" id=""><br>
        <input type= "submit" value="Log In" name="submit">
    </form>
</body>
</html>