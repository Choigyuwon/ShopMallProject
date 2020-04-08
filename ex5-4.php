<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4주차 개인 과제</title>
</head>
<body>
<?php
$점수 = array(1=>array(10,20,30), array(30,40,50), array(100,80,90));

print("1반의 최고 성적은 ".$점수[1][2]."이다<br>\n");
print("2반의 최고 성적은 ".$점수[2][2]."이다<br>\n");
print("3반의 최고 성적은 ".$점수[3][0]."이다<br>\n");
$거래처 = array("서울" => array("롯데", "신세계", "미도파"),
    "강릉" => array("대한통운","One마트"),
    "광주" => array("광주","전라"));

print("서울 거래처는 ");
for($i=0;$i<count($거래처["서울"]);$i++)
    print($거래처["서울"][$i]." ");
print("<br>");
print("강릉 거래처는 ");
for($i=0;$i<count($거래처["강릉"]);$i++)
    print($거래처["강릉"][$i]." ");
print("<br>");
print("광주 거래처는 ");
for($i=0;$i<count($거래처["광주"]);$i++)
    print($거래처["광주"][$i]." ");
print("<br>");
?>




</body>
</html>