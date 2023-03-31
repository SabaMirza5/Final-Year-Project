<?php
$stu_name = $_GET['firstname'];
//certificate created here//
if(isset($_POST['name']))
{
  
$font=('C:\xampp\htdocs\certification\fonts\BRUSHSCI.ttf');
$image=imagecreatefromjpeg("certify.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="Iqra Shafaqat";
imagettftext($image,100,0,700,800,$color,$font,$_POST['name']);
$date="17 june 2022";
imagettftext($image,30,0,1290,1200,$color,$font,$date);
$file=time();
$file_path="certificates/".$file.".jpg";
$file_path_pdf="certificates/".$file.".pdf";
imagejpeg($image,$file_path);
imagedestroy($image);

// convert into pdf//
require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image($file_path,0,0,210,150);
$pdf->Output($file_path_pdf,"f");

//mail the pdf created //
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
$mail->addAddress($_POST['email']);
$mail->isHTML(true);
$mail->Subject="Certificate Genetrated";
$mail->Body="Certificate Genetrated";
$mail->addAttachment($file_path_pdf);
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



}
?>




<form method="POST">
<h3 class="form-signin-heading"><i class="icon-lock"></i> Please Enter User Detail</h3>
  <input type="textbox" name="name" value="<?php echo $stu_name ?>"placeholder="Enter name"/>
  <!--  email of person whome we want to shoot mail -->
  <input type="email" name="email" placeholder="Enter email"/>
  <input type="submit"/>

</form>