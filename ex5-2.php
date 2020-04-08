<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4주차 개인 과제</title>
</head>
<body>
<?php
$student["이름"]="김기영";
$student["학과"]="강릉시";
$student["주소"]="컴퓨터공학과";
$student["TEL"]="033-640-2828";

for(reset($student);$index=key($student);next($student)){
    $temp_val=pos($student);
    print("$index : $temp_val<br>\n");
}
?>
</body>
</html>