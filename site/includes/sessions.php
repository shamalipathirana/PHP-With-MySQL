
<?php
session_start();
$_SESSION['user_id']=30;
$_SESSION['first_name']='shamali';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
    echo "user ID:{$_SESSION['user_id']}<br>";
    echo "user ID:{$_SESSION['first_name']}<br>";
    ?>
</body>
</html>