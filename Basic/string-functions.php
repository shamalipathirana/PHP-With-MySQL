<?php

$first="i am shamali";
$second=" I am an undergraduate";
$sentence=$first;
$sentence .= $second;
echo $sentence;

?>

<br>


<?php
echo strtolower($sentence);
echo "<br>";
echo strlen($first);
echo "<br>";
echo ucfirst($first);
?>