<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name_tel'];
$text = $_POST['user_text_tel'];
$email = $_POST['user_email_tel'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'usertalimator@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'b0WO5FZ8cvV7rq0tIaaT'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('usertalimator@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('marac2022@mail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка на заказ';
$mail->Body = '' .$name . ' оставил заявку с телефона! <br> Mail.ru : ' . $email . '<br><br> Сообщение <br><br>' . $text;
$mail->AltBody = '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}
?>