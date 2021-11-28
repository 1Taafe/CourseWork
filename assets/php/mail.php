<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phoneNumber'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$product = $_POST['product'];
$cost = $_POST['cost'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dima759mi@yandex.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'taafe7127778'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('dima759mi@yandex.ru'); // от кого будет уходить письмо?
$mail->addAddress($email);     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка на оформление заказа Offstore';
$mail->Body    = '
<table border="1">
<tr>
<td>Имя:    </td> 
<td>'.$name.'</td> 
</tr>
<tr>
<td>E-mail:    </td> 
<td>'.$email.'</td> 
</tr>
<tr>
<td>Номер телефона:    </td> 
<td>'.$phone.'</td> 
</tr>
<tr>
<td>Адресс:    </td> 
<td>'.$adress.'</td> 
</tr>
<tr>
<td>Товар:    </td> 
<td>'.$product.'</td> 
</tr>
<tr>
<td>Стоимость:    </td> 
<td>'.$cost.'</td> 
</tr>
</table>
<br>Для подверждения заказа оператор свяжется с вами по указаному номеру телефона.
<br>Благодарим вас за то, что выбрали Offstore.
<br><3
';

$mail->AltBody = 'offstore';

if(!$mail->send()) {
    #header('location: ../../error.html');
    echo $mail->ErrorInfo;
} else {
    header('location: ../../ty.html');
}
?>