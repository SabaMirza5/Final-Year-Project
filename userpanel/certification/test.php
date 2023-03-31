<?php

// require('fpdf.php');
// $pdf=new FPDF();
// $pdf->AddPage();
// $pdf->Image("certify.jpg",0,0,210,150);
// $pdf->Output("test.pdf","f");

include('smtp/PHPMailerAutoload.php');
$mail=new PHPMailer();
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPSecure="tls";
$mail->SMTPAuth=true;
$mail->Username="iqrashafaqat032768@gmail.com";
$mail->Password="lcvzbyjwtyqyvlmw";
$mail->setFrom("iqrashafaqat032768@gmail.com");
$mail->addAddress("iqrashafaqat032768@gmail.com");
$mail->isHTML(true);
$mail->Subject="Certificate Genetrated";
$mail->Body="Certificate Genetrated";
$mail->addAttachment("certificates/1666287951.pdf");
$mail->SMTPOptions=array("ssl"=>array(
    "varify_peer"=>false,
    "varify_peer_name"=>false,
    "allow_self_signed"=>false,
));
if($mail->send())
{
    echo"Send";

}
else
{
    echo $mail->ErrorInfo;
}



?>