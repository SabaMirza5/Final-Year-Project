<?php
$con=mysqli_connect("localhost","root","","certificate");
$res=mysqli_query($con,"select * from students where status=0 limit 1");
if(mysqli_num_rows($res)>0)
{
  header('content-type:image/jpeg');
  $font=('C:\xampp\htdocs\certification\fonts\BRUSHSCI.ttf');
  $image=imagecreatefromjpeg("certify.jpg");
  $color=imagecolorallocate($image,19,21,22);

while($row=mysqli_fetch_assoc($res))
   {
     $name="Iqra Shafaqat";
     imagettftext($image,100,0,700,800,$color,$font,$name);
     $date="17 june 2022";
     imagettftext($image,30,0,1290,1200,$color,$font,$date);
     $file=time().'_'.$row['id'];
     imagejpeg($image,"certificates/".$file.".jpg");
     imagedestroy($image);
     mysqli_query($con,"update students set status=1 where id= '".$row['id']."'");
   }
}
?>