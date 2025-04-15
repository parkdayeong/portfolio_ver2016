<?

$DIR = "/home/ant/munggo/public_html/study/php/mail";

// 메일 보내는 라이브러리 불러옴
require_once("$DIR/mail.php");

$FName = $fname;
$FEmail = $fmail;
$subject = $subject;
$body = $word;
$mType = $html;

$MailTo = $to;

$MailFrom = "$FName <$FEmail>";
$MailSubject = "$subject";
$MailBody = "$body";
$MailChar = "euc-kr";

if($mType == 0)
    $mType = 'text/plain';
else
    $mType = 'text/html';




$m = new Mail(); //메일 객체 생성
$m->From( $MailFrom ); //보낸사람

$i = 0;
while( $i<count($MailTo) )
{
	$m->To( $MailTo[$i] ); //받는사람	
	$i++;
}

$m->Subject( $MailSubject ); //제목
$m->Body( $MailBody, $MailChar, $mType ); //메일 내용, charset
$m->Priority(0); //메일 중요도



$up_dir = "tmp_data";
//파일 업로드를 할수있게 클래스를 생성한다.
require("$DIR/upload.php");
$F = new upload( "", "134217728", "$DIR/$up_dir" );

$i = 0;
$n = 0;
while( $i<count($file) )
{
	if( $file[$i] )
	{
		$filetype[$n] = $file_type[$i];
		$ofilename[$n] = $file_name[$i];
		$filesize[$n] = $file_size[$i];

		$filename[$n] = $F -> putFile("$filetype[$n]", "$ofilename[$n]", "$filesize[$n]", "$file[$i]");
		$m->Attach( "$DIR/$up_dir/$filename[$n]", "$filetype[$n]" );
		$n++;
	}
	$i++;
}



$a = $m->Send(); //메일 보내기

$i = 0;
while( $i<count($filename) )
{
	if( $filename[$i] && file_exists("$DIR/$up_dir/$filename[$i]") )
	{
		unlink("$DIR/$up_dir/$filename[$i]");
	}
	$i++;
}

?>
