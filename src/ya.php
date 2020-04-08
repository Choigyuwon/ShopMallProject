<html>
<HEAD>
    <TITLE></TITLE>
</HEAD>
<BODY>
<?

$team_member["이름"]=서진호;
$team_member["이름"]=정예락;
$team_member["이름"]=김필재;
$team_member["이름"]=홍길동;
$team_member["이름"]=아무개;
$team_member["이름"]=김흥국;
$team_member["이름"]=김종국;
$team_member["이름"]=유재석;
$team_member["이름"]=김창렬;
$team_member["이름"]=임창정;

$team_member["학번"]="20141632";
$team_member["학번"]="20151574";
$team_member["학번"]="20141628";
$team_member["학번"]="20151234";
$team_member["학번"]="20147894";
$team_member["학번"]="20146574";
$team_member["학번"]="20157812";
$team_member["학번"]="20164812";
$team_member["학번"]="20174125";
$team_member["학번"]="20146123";

$team_member["전화번호"]="01012345678";
$team_member["전화번호"]="01041791062";
$team_member["전화번호"]="010123456789";
$team_member["전화번호"]="01012846128";
$team_member["전화번호"]="01046138254";
$team_member["전화번호"]="01094872165";
$team_member["전화번호"]="01016487256";
$team_member["전화번호"]="01062464877";
$team_member["전화번호"]="01016559856";
$team_member["전화번호"]="01024162235";

$team_number=count($team_member);
print("우리 팀의 멤버 이름과 정보는"."<BR>\n");

for (reset($team_member); $index=key($team_number); next($team_member)) {
    $temp_val = pos($team_member);
    print("$index : $temp_val <BR>\n");
}

?>
</BODY>
</html>