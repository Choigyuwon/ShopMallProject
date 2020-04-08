<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4주차 개인 과제</title>
</head>
<?php
$a=1;
$b=2;
function sum(){
    global $a, $b;
    $b= $a+$b;
}
sum();
echo $b;
?>
<body>




</body>
</html>