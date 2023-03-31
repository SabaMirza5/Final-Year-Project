<?php
 header('content-type:image/jpeg');
 $stu_name = $_GET['firstname'];
$font=('C:\xampp\htdocs\certification\fonts\BRUSHSCI.ttf');
$image=imagecreatefromjpeg("certify.jpg");
$color=imagecolorallocate($image,19,21,22);
$name=$stu_name;
imagettftext($image,100,0,700,800,$color,$font,$name);
$date="17 june 2022";
imagettftext($image,30,0,1290,1200,$color,$font,$date);
//for show in folder
// imagejpeg($image,"certificates/iqra.jpg");
imagejpeg($image);
imagedestroy($image);

?>

