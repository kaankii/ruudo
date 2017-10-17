<?php

$name = $_POST['m_realname'];
$telef = $_POST['m_telno'];
$amac = $_POST['amac-optionsRadios'];
$mesaj = $_POST['m_mesaj'];

require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
$mail->Host = "smtp.yandex.com.tr"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "testmelih@yandex.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = "test9966"; // Mail adresimizin sifresi
$mail->SetFrom("testmelih@yandex.com", "RUUDO"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress("kaanozcorekci@gmail.com"); // Mailin gönderileceği alıcı adres
$mail->AddCC('melihsahinkesen@hotmail.com');
//$mail->AddCC('info@logocum.net');
$mail->Subject = "Ruudo - Mesaj formu dolduruldu"; // Email konu başlığı
$mail->Body = "<strong>$from</strong><br><br> <strong>İsim:</strong> $name<br> <strong>Telefon:</strong> $telef<br> <strong>Ulaşma Sebebi:</strong> $amac<br> <strong>Müşteri Mesajı:</strong> $mesaj<br><br>  "; // Mailin içeriği

if(!$mail->Send()){
	//echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
	header('Location: ../../form-gonderilemedi.php');
} else {
	header('Location: ../../form-gonderildi.php');
}

?>

