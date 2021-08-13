<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF-ELSE</title>
</head>
<body>
    <?PHP
    $avg_score=50;
    if($avg_score>70){
        echo "Grade A";
    }
    else if($avg_score>=40){
        echo "Grade B";
    }
    else{
        echo "plase try again";
    }
    ?>
</body>
</html>