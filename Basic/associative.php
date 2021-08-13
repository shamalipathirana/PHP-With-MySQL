<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays</title>
</head>
<body>
<?php
$student = array("first_name" => "Shamali","Last_Name" => "Pathirana", "Age"=> 25);
?>
<?php
echo $student["first_name"];
?>
<br>
<?php
echo $student["first_name"]." " .$student["Last_Name"];
?>

    
</body>
</html>