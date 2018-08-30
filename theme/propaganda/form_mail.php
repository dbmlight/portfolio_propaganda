<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>프로파간다</title>
</head>
<body>
<?php
    $mailTo = "dbmlight@naver.com";
    // 받는사람 메일 주소;
    $mailFrom = "dbmlight@dbmlight.net";
    // 보내는사람 메일주소 
    $name = $_POST['name'];
    $mailSubject = "프로파간다 CONTACT";
    $mailContent = '보낸사람 : '.$_POST['name'].'<br>'
        .'Email : '.$_POST['email'].'<br>'
        .'내용 : '.$_POST['content'];

    $mailHeader = "From : $mailFrom\r\n";
    $mailHeader .= "MIME-Version: 1.0\r\n";
    $mailHeader .= "Content-type: text/html; charset=euc-kr\r\n";

    $mailResult = mail ($mailTo, $mailSubject, $mailContent, $mailHeader, '-f'.$mailFrom);

    echo 'Dear '.''.$name.'<br>';
    echo 'Thanks for submitting the form.<br>';

    if (true == $mailResult) {
        echo "Success 메일이 발송되었습니다.";
    }
    else {
        echo "Failuare 메일이 발송되지 않았습니다.";
    }
?>
</body>
</html>