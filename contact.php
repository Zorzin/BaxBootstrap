
<?php
header( 'Content-Type: text/html; charset=utf-8' );
$email = $_POST['email'];
$text = $_POST['message'];
$name = $_POST['name'];

$formcontent=" Od: $name" . "<br>". "Tytuł: Mail ze strony bax.sokolka.com" . "<br>" . "Treść: $text";
$recipient = 'panonim7@gmail.com';
$mailsubject = "Mail ze strony bax.sokolka.com";
$mailheader = "From: $email \r\n";
$mailheader .= "MIME-Version: 1.0" . "\r\n";
$mailheader .= "Content-type:text/html;charset=UTF-8" . "\r\n";
if ($email == '' || $text == '' || $name == ''){
    echo '<h2 style="text-align:center;color:#fff;"> Wiadomość nie została wysłana! </h2>'.'<h3 style="text-align:center;color:#fff;"> Prosimy uzupełnić wszystkie pola! </h3>';
}
else
{
$val = mail($recipient, $mailsubject, $formcontent, $mailheader) or die(
    '<h2 style="text-align:center;color:#fff;"> Błąd. Proszę upewnić się, czy połączenie z internetem nie zostało przerwane. </h2>'
);
echo '<h2 style="text-align:center; color:#fff;"> Wiadomość wysłana! </h2>'.'<h3 style="text-align:center;color:#fff;"> Dziękujemy za kontakt! </h3>';
}
?>
