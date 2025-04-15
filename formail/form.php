<!--
# PHP 개발자 #
이  름: 조재상
이메일: oralol@naver.com
블로그: http://oralol.blog.me
-->
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi' />
    <title>무료상담신청</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.form.js"></script>
    <script type="text/javascript" src="http://www.douzonerp.com/formail/js/imageMapResizer.min.js"></script>
</head>

<body>
    <center>
        <table>
            <tr>
                <td valign="top">
                    <center>
                        <h1><img style="width:100%;max-width:700px;" src="http://www.douzonerp.com/img/bnr/1907/form_03.jpg" alt="" usemap="#hp" ></h1>
                    </center>
                    
           
                    <p style="text-align:right">

                        <font color='#ff0000'>*</font> 표시는 필수 입력 사항 입니다.

                    </p>
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#888" style="max-width:700px;">
                        <form id="form1" name="form1" method="post">
                            <input type="hidden" name="mode" value="send">
                            <tr bgcolor="#00a0ea">
                                <td colspan="2" style="color:white; font-size:17px; font-weight:bold;">신청정보</td>
                               
                            </tr>
                            <tr bgcolor="white" class="select">
                                <td height="22" align="center" bgcolor="#e5e5e5" style="font-weight:bold;font-size:14px;">상담희망제품(필수)<font color='red'>*</font>
                                </td>
                                <td><input type="checkbox" name="questype" value="더존 smart A">더존 Smart A
                                    <input type="checkbox" name="questype" value="더존 Smart A Cloud">더존 Smart A Cloud
                                    <input type="checkbox" name="questype" value="더존 ERP i CUBE">더존 ERP i CUBE
                                    <br>
                                    <input type="checkbox" name="questype" value="더존 ERP i CUBE G20 (비영리)">더존 ERP i CUBE G20 (비영리)
                                    <input type="checkbox" name="questype" value="그룹웨어 – 더존 Bizbox Alpha">그룹웨어 – 더존 Bizbox Alpha
                                    <br>
                                    <input type="checkbox" name="questype" value="정보보안 & 팩스">정보보안 & 팩스
                                    <input type="checkbox" name="questype" value="기타(건설ERP, Cloud, 자동전표, 모바일)">기타 (건설ERP, Cloud, 자동전표, 모바일)

                                </td>
                            </tr>
                            <tr bgcolor="white" class="select">
                                <td height="22" align="center" bgcolor="#e5e5e5" style="font-weight:bold;font-size:14px;">상담희망모듈(선택) </td>
                                <td><input type="checkbox" name="questype2" value="회계관리">회계관리
                                    <input type="checkbox" name="questype2" value="인사급여관리">인사급여관리
                                    <input type="checkbox" name="questype2" value="영업/구매관리">영업/구매관리
                                    <input type="checkbox" name="questype2" value="생산관리">생산관리
                                    <input type="checkbox" name="questype2" value="세무조정">세무조정
                                    <input type="checkbox" name="questype2" value="무역관리">무역관리
                                </td>
                            </tr>
                            <tr bgcolor="white">
                                <td width="25%" height="22" align="center" bgcolor="#e5e5e5" style="font-weight:bold;font-size:14px;">업체명(성명)<font color='red'>*</font>
                                </td>
                                <td width="75%"><input id="name" name="name" type="text" size="10" maxlength="70">

                                </td>
                            </tr>

                            <tr bgcolor="white">
                                <td height="22" align="center" bgcolor="#e5e5e5" style="font-weight:bold;font-size:14px;">연락처<font color='red'>*</font>
                                </td>
                                <td><select name="hp1">
                                        <option value="010">010</option>
                                        <option value="010">011</option>
                                        <option value="010">016</option>
                                        <option value="010">017</option>
                                        <option value="010">018</option>
                                        <option value="010">019</option>
                                        <option value="010">02</option>
                                        <option value="010">070</option>
                                        <option value="010">051</option>
                                        <option value="010">053</option>
                                        <option value="010">032</option>
                                        <option value="010">062</option>
                                        <option value="010">042</option>
                                        <option value="010">052</option>
                                        <option value="010">044</option>
                                        <option value="010">031</option>
                                        <option value="010">033</option>
                                        <option value="010">043</option>
                                        <option value="010">041</option>
                                        <option value="010">063</option>
                                        <option value="010">061</option>
                                        <option value="010">054</option>
                                        <option value="010">055</option>
                                        <option value="010">064</option>
                                    </select>-
                                    <input name="hp2" type="text" size="4" maxlength="4">-
                                    <input name="hp3" type="text" size="4" maxlength="4">

                                </td>
                            </tr>


                            <tr bgcolor="white">
                                <td height="22" align="center" bgcolor="#e5e5e5" style="font-weight:bold;font-size:14px;">이메일주소
                                </td>
                                <td><input name="email" type="text" style="width:200px" maxlength="100">
                                </td>
                            </tr>
                              <tr bgcolor="#00a0ea">
                                <td colspan="2" style="color:white; font-size:17px; font-weight:bold">기타</td>
                               
                            </tr>
                            <tr bgcolor="white">
                                <td height="22" align="center" bgcolor="#e5e5e5" style="font-weight:bold;font-size:14px;">기타사항(문의사항)</td>
                                <td><textarea name="content" cols="70" rows="12" style="width:100%;"></textarea></td>
                            </tr>
                            <tr bgcolor="white">
                                <td colspan="2"><textarea name="content2" cols="50" rows="10" style="width:100%; ">개인정보 취급방침

당사는 개인정보취급방침을 통하여 귀하께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.

*개인정보의 수집목적 및 이용목적 

당사는 이용자 확인, 문의상담 등의 목적으로써 귀하에게 최적의 서비스를 제공하기 위한 목적으로 귀하의 개인정보를 수집·이용하고 있습니다.  수집하는 개인정보 항목에 따른 구체적인 수집목적 및 이용목적은 다음과 같습니다.

1.성명, 이메일주소, 연락처 : 서비스 이용에 따른 본인 확인 절차에 이용 및 상담처리
2.문의내용, 첨부파일 및 기타 : 원할한 상담을 위한 참고자료
 
* 개인정보의 수집

1. 당사는 홈페이지를 통한 신청서 작성 시 서비스 이용을 위해 필요한 최소한의 개인정보만을 수집합니다.
2. 귀하가 당사의 서비스를 이용하기 위해서는 연락처, 성명 등을 필수적으로 입력하셔야 합니다.

그러나, 문의 내용, 첨부파일 같은 선택항목은 이를 입력하지 않더라도 서비스 이용에는 제한이 없습니다.

* 개인정보의 보유기간 및 이용기간

1. 당사의 개인정보 수집 및 이용목적이 달성된 후에는 즉시 삭제토록 되어 있습니다.
</textarea></td>
                            </tr>
                            <tr bgcolor="white" style="text-align:center;">
                                <td colspan="2">
                                    <strong>개인정보 취급방침에 동의하시겠습니까?</strong> 
                                    <input type="radio" name="questype3" value="예">예
                                    <input type="radio" name="questype3" value="아니오">아니오
                                </td>
                            </tr>
                        </form>
                    </table>
                    <table style="width:100%">
                        <tr>
                                <td style="font-size:20px;">
                                    <input type="button" id="submit" class="btn_blue_light" value=" 상담신청하기 " onclick="form_Check();"> <span id="result"></span>
                                </td>
                            </tr>
                        
                    </table>
                </td>
            </tr>
        </table>

    </center>
</body>
         <map name="hp" id="hp"> 
     <area shape="rect"  coords="51 255 340 451"  alt="smartA"  title="smartA"  target="_blank"  href="http://douzonerp.com/s1/s1_1.php" /> 
     <area shape="rect"  coords="352 255 642 451"  alt="스마트에이 클라우드"  title="smartA"  target="_blank"  href="http://douzonerp.com/s1/s1_4.php" /> 
     <area shape="rect"  coords="656 255 950 451"  alt="이알피 아이큐브"  title="smartA"  target="_blank"  href="http://douzonerp.com/s1/s1_3.php" /> 
     <area shape="rect"  coords="51 465 340 659"  alt="아이큐브 g20"  title="smartA"  target="_blank"  href="http://douzonerp.com/s1/s1_3_4.php" /> 
     <area shape="rect"  coords="352 465 642 659"  alt="비즈박스알파"  title="smartA"  target="_blank"  href="http://douzonerp.com/s1/s1_5.php" /> 
     <area shape="rect"  coords="656 465 950 659"  alt="정보보안&전자팩스"  title="smartA"  target="_blank"  href="http://douzonerp.com/s1/s1_8.php
     
     
     
     
     " /> 
    </map> 
</html>

<script>

    $('map').imageMapResize();
    
    $("#name").focus(function() {
        $('#result').html("");
        $('#submit').show();
    });

    function form_Check() {
        if (form1.questype[0].checked == false && form1.questype[1].checked == false && form1.questype[2].checked == false && form1.questype[3].checked == false && form1.questype[4].checked == false && form1.questype[5].checked == false && form1.questype[6].checked == false) {
            alert("상담희망제품을 선택해주십시오.");
            form1.questype[0].focus();
            return;
        }
        if (form1.name.value == '') {
            alert("성함을 입력해주세요.");
            form1.name.focus();
            return;
        }
        if (form1.hp1.value == '') {
            alert("휴대폰번호를 입력해주세요.");
            form1.hp1.focus();
            return;
        }
        if (form1.hp2.value == '') {
            alert("연락처를 입력해주세요.");
            form1.hp2.focus();
            return;
        }
        if (form1.hp3.value == '') {
            alert("연락처를 입력해주세요.");
            form1.hp3.focus();
            return;
        }
//        if (form1.email.value == '') {
//            alert("연락처를 입력해주세요.");
//            form1.email.focus();
//            return;
//        }
        if (form1.questype3.value == '' || form1.questype3[1].checked == true) {
            alert("개인정보 취급방침에 동의해주세요.");
            form1.questype3.focus();
            return;
        }
        if (!confirm('상담신청을 하시겠습니까?')) return;
        //form1.submit();

        //Ajax 전송 시작
        $('#submit').hide();
        $('#result').html("<img src='indicator.gif' align='absmiddle'> <font color='blue'>전송중입니다. 잠시 기다려주세요.</font>");
        var form = $("form")[0];
        var formData = new FormData(form);
        $.ajax({
            url: "form_send.php",
            processData: false,
            contentType: false,
            data: formData,
            type: "POST",
            cache: false,
            success: function(args) {
                $('#result').html(args);
                $('#form1').trigger("reset");
                //$('#submit').show();
            },
            error: function(args) {
                $('#result').html("<font color='red'>필수 입력값을 모두 입력해주세요.</font>");
                $('#form1').trigger("reset");
                //$('#submit').show();
            },
        })
        //Ajax 전송 끝.
    }

</script>
