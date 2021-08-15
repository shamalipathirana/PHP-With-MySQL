<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
    $jobs=array("Accounting","Finance","IT","Marketing");
    foreach($jobs as $job){
        echo $job ."<br>";
    }

    ?>
    <br>

    <?php
    $student=array("first_name"=>"Shamali","last_name"=>"Pathirana","age"=>25);
    foreach($student as $label=>$mystudent){
        echo $label.":".$mystudent."<br>";
    }
    ?>
    
</body>
</html>
