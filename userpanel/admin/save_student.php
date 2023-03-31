<?php
include('dbcon.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';
        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $class_id = $_POST['class_id'];


               mysqli_query($conn,"insert into student (username,firstname,lastname,location,class_id,status)
		values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Unregistered')                                    
		") or die(mysqli_error()); 
        
        $name = htmlentities($_POST['fn']);
        $lastname = htmlentities($_POST['ln']);
        $email = htmlentities($_POST['email']);
       
        $id  = htmlentities($_POST['un']);
        $classname = htmlentities($_POST['class_id']);
        $message = 'Request has been approved '.$name.$lastname. $email.$classname;
    
    
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username ='saniatalib888@gmail.com';
        $mail->Password = 'mjtmqojnbleextfu';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($email);
        $mail->Subject = ("$email ($lastname)");
        $mail->Body = $message;
        $mail->send();
    
    
     if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    
       //header("Location: ./add_students.php");
        
        
        
        
        ?>
<?php    ?>