<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <?php
    $mynumbers = array(18,12,11,14,15,19,17);
    ?>
    <br>
    <?php
    echo max($mynumbers);
    ?>
    <br>
    <?php
    echo min($mynumbers);
    ?>
    <br>
    <?php
    echo count($mynumbers);
    ?>
    <br>
    <pre>
    <?php
    sort($mynumbers);
    print_r($mynumbers);
    ?>
    <pre>
</body>
</html>