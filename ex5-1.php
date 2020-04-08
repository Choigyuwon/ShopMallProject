<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4주차 개인 과제</title>
</head>
<body>
<?php
$name[]="최규원";
$name[]="이인이";
$name[]="홍길동";
$name[]="오이오";
$number=count($name);
print("멤버는 모두 " .$number."명 입니다<br>\n");
for($i=0;$i<$number;$i++){
    print("$name[$i]");
}
print("<br>내맘에 드는 멤버는 $name[2]임<br>\n");
?>
</body>
</html>