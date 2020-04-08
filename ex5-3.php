<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4주차 개인 과제</title>
</head>
<body>
<?php
$요일 = array(
    1 => "월요일", "화요일", "수요일", "목요일", "금요일", "토요일", "일요일",
    "월" => "Mon", "화" => "Tus", "수" => "Wed", "목" => "Thu",
    "금" => "Fri", "토" => "Sat", "일" => "Sun");
print("내 생일은 이번주 $요일[5] 이다<br>\n");
print("내 가방 상표는 Black ".$요일["금"]." 이다 <br>\n");
?>
</body>
</html>