<?

$DIR = "/home/ant/munggo/public_html/study/php/mail";

// ���� ������ ���̺귯�� �ҷ���
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




$m = new Mail(); //���� ��ü ����
$m->From( $MailFrom ); //�������

$i = 0;
while( $i<count($MailTo) )
{
	$m->To( $MailTo[$i] ); //�޴»��	
	$i++;
}

$m->Subject( $MailSubject ); //����
$m->Body( $MailBody, $MailChar, $mType ); //���� ����, charset
$m->Priority(0); //���� �߿䵵



$up_dir = "tmp_data";
//���� ���ε带 �Ҽ��ְ� Ŭ������ �����Ѵ�.
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



$a = $m->Send(); //���� ������

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
