<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4주차 개인 과제</title>
</head>
<body>
<?php

$team_member = array("이름" => array("최규원", "홍길동","최길동","이길동","윤길동","오길동","김길동","이규원","김규원","오규원"),
    "학번" => array("20151580","20151523","20152151","20153561","20135331","20141231","20112345","20191231","20152340","20151509"),
    "전화번호" => array("01045356076","01012345667","0105515231","01069393921","01099298821","01099418842","01095929123","01082712812","01099992222","01011112313"));

print("우리 팀의 멤버 이름과 정보는"."<br>\n");
for($i=0;$i<count($team_member["이름"]);$i++)
print($team_member["이름"][$i]." ".$team_member["학번"][$i]." ".$team_member["전화번호"][$i]."<br>");
?>




</body>
</html>