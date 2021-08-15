<?php
$username=$_POST['username'];
$password=$_POST['password'];

if($username=='shamali' && $password=='pass'){
    echo "Login Successful";
}else{
    echo "Invalid username or password";
}
?>