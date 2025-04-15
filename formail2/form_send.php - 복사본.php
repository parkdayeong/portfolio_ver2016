<?php
include "mailer.php";

$mode = $_REQUEST['mode'];
$name = $_REQUEST['name'];
$hp1 = $_REQUEST['hp1'];
$hp2 = $_REQUEST['hp2'];
$hp3 = $_REQUEST['hp3'];
$hp = $hp1."-".$hp2."-".$hp3;
$email = $_REQUEST['email'];
$questype = $_REQUEST['questype'];
$questype2 = $_REQUEST['questype2'];
$questype3 = $_REQUEST['questype3'];
$content = $_REQUEST['content'];
$ip = $_SERVER['REMOTE_ADDR'];

$subject = "[폼메일-상담신청] $name ($questype, $hp)";
$body = "";

$body .= "업체명(성함): $name<br>";
$body .= "연락처: $hp<br>";
$body .= "이메일: $email<br>";
$body .= "상담희망제품(필수): $questype<br>";
$body .= "상담희망모듈(선택): $questype2<br>";
$body .= "기타문의사항: $content<br>";
$body .= "개인정보취급방침 동의: $questype3<p>&nbsp;<p>";

$body2 = "<table border='0' cellspacing='1' cellpadding='3' bgcolor='#444'>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>업체명(성함)</td><td align='left'>$name</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>연락처</td><td align='left'>$hp</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>이메일</td><td align='left'>$email</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>상담희망제품(필수)</td><td align='left'>$questype</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>상담희망모듈(선택)</td><td align='left'>$questype2</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>기타문의사항</td><td align='left'>$content</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>개인정보취급방침 동의</td><td align='left'>$questype3</td></tr>";
$body2.= "</table>";

//$admin_email = "받을 메일주소 입력";
$admin_email = "molra0000@douzoneon.com";
$email = "molra0000@douzoneon.com";

if($mode == "send") {
	//파일첨부 시작
	for($i=1;$i<=3;$i++) {
		$file[$i] = $_FILES['userfile'.$i]['name'];
		$target[$i] = "./temp/".$file[$i];

		if (move_uploaded_file($_FILES['userfile'.$i]['tmp_name'], $target[$i])) {
			chmod("$target[$i]", 0777);
		}
	}

	$ret = mailer($name, $email, "Admin", $admin_email, $subject, $body.$body2, $file);

	if($file[1] != "") @unlink($target[1]);
	if($file[2] != "") @unlink($target[2]);
	if($file[3] != "") @unlink($target[3]);
	if($ret) echo "<script> alert('상담신청을 감사합니다.빠르고 친절한 상담을 약속드립니다.');location.replace('http://www.douzonerp.com/'); </script>";
	else echo "<script> alert('정보를 정확하게 입력해주세요');location.replace('http://molra0718.cafe24.com/formail/form.php'); </script>";
}

?>
