<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>

</head>
<body>
    <?php
    $cars = array("volvo","mazda","Toyota");
    echo $cars[0];

    ?>

    <br>
    <pre>
    <?php
    print_r($cars);
    ?>
    <br>
    <?php
    $cars[4]="Suziki";
    $cars[]="Mitsubishi";
    //print_r($mycars);
    ?>
    <br>
    <pre>
    <?php
    print_r($cars);
    ?>
    </pre>
</body>
</html>