<?php include 'header.php';?>
<?php $name=$_GET['course_name'];?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $name = htmlentities($_POST['firstname']);
    $email = htmlentities($_POST['Email']);
    $lastname = htmlentities($_POST['lastname']);
    $message = 'Your Request has been submitted please wait for';


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

    header("Location: ./web.php");
}

?>


<?php
if (isset($_POST['send'])){
  $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $conn = mysqli_connect('localhost','root','','capstone') or die(mysqli_error());
    $course_query = mysqli_query($conn,"INSERT INTO `enrollquiz`(`firstname`, `lasttname`,`q1`,`q2`,`q3`,`q4`,`q5`,`status`) VALUES ('$firstname','$lastname','$q1','$q2','$q3', '$q4', '$q5','1')")or die(mysqli_error());
  header("Location: ./userpanel/");
  
}
$conn = mysqli_connect('localhost','root','','capstone') or die(mysqli_error());
											$course_query = mysqli_query($conn,"select * from courses where course_name = '$name'")or die(mysqli_error());
											while($row = mysqli_fetch_array($course_query)){
											$id = $row['id'];
											
                      $image =$row['course_image'];
                      $course_name =$row['course_name'];
                      $course_code =$row['course_code'];
                      $course_rating =$row['course_rating']; 
                      $course_description =$row['course_description'];
                      $course_hours =$row['course_hours'];
                      $course_monrth =$row['course_month'];
                      $course_mod =$row['course_mod'];
                      
                      
                      } ?> 


<!-- about us page  section starts  -->
<section class="web" id="web">
    <h2><?php echo $name;?></h2>
</section>
<section id="course-inner">
    <div class="overview">
        <img class="course-img" src="./userpanel/admin/<?php echo $image?>" alt="">
        <div class="course-head">
            <div class="c-name">
                <h3><?php echo  $course_name;?></h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p><?php echo  $course_description; ?></p>
            </div>
        </div>
        <h3>Instructor</h3>
        <div class="tutor">
          <img src="" alt="">
          <div class="tutor-det">
            <h5>Ali Raza</h5>
            <p>web developer at Google</p>
          </div>
        </div>
        <hr><br><br>
        <h3>Course Overview</h3>
        <p>Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network) .Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services. A more comprehensive list of tasks to which Web development commonly refers, may include Web engineering, Web design, Web content development, client liaison, client-side/server-side scripting, Web server and network security configuration, and e-commerce development. <br><br>
          Among Web professionals, "Web development" usually refers to the main non-design aspects of building Web sites: writing markup and coding. Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills. For larger organizations and businesses, Web development teams can consist of hundreds of people (Web developers) and follow standard methods like Agile methodologies while developing Web sites. Smaller organizations may only require a single permanent or contracting developer, or secondary assignment to related job positions such as a graphic designer or information systems technician.<br><br>
           Web development may be a collaborative effort between departments rather than the domain of a designated department. There are three kinds of Web developer specialization: front-end developer, back-end developer, and full-stack developer. Front-end developers are responsible for behavior and visuals that run in the user browser, while back-end developers deal with the servers.</p>
           <hr>
        <h3>What you will learn in this course</h3>
        <div class="learn">
          <p><i class="far fa-check-circle"></i> Breif introduction of web development</p>
          <p><i class="far fa-check-circle"></i> importance of web development</p>
          <p><i class="far fa-check-circle"></i> web development tool and technique</p>
          <p><i class="far fa-check-circle"></i> languages of web development</p>
          <p><i class="far fa-check-circle"></i> practice work of course</p>
          <p><i class="far fa-check-circle"></i> framework for web development</p>
        </div>
    </div>
    <div class="enroll">
      <h3>This course include:</h3>
          <p><i class="far fa-video"></i><?php echo  $course_hours; ?> video hours</p>
          <p><i class="far fa-newspaper"></i> 75 articles</p>
          <p><i class="far fa-cloud-download"></i> downloadable resources</p>
          <p><i class="far fa-infinity"></i> full life time access</p>
          <p><i class="far fa-mobile-alt"></i> access on laptop and  mobile</p>
          <p><i class="far fa-paperclip"></i> assingments</p>
          <p><i class="far fa-trophy-alt"></i>certificate of complation</p>


  <!-- Button trigger modal -->
  <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Enroll Now
  </button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
        
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form  method= post action="#">
          <div class="mb-3">
                <label for="disabledSelect" class="form-label">Javascript is an _______ language?</label>
                <select id="disabledSelect" name='q1'class="form-select">
                  <option>Object-Oriented</option>
                  <option>Object based</option>
                  <option>Procedural</option>
                  <option>None of above</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Html stands for</label>
                <select id="disabledSelect" name='q2'class="form-select">
                  <option>Hypertext markup language</option>
                  <option>Hyphan markup language</option>
                  <option>hypertext makeup language </option>
                  <option>Hyphantext markup language</option>
                 
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">How many types of lists in HTML?</label>
                <select id="disabledSelect" name='q3'class="form-select">
                  <option> 2</option>
                  <option> 4</option>
                  <option> 5</option>
                  <option> 3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">In how many ways can CSS be written in?</label>
                <select id="disabledSelect" name='q4'class="form-select">
                  <option> 1</option>
                  <option> 2</option>
                  <option> 3</option>
                  <option> 4</option>
                  <option> 5</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">The full form of CSS is:</label>
                <select id="disabledSelect" name='q5'class="form-select">
                  <option>cascading stylesheet</option>
                  <option>Coloured special sheet</option>
                  <option>Coloured and stylesheet</option>
                  <option>None of these</option>
                 
                </select>
              </div>
              <label for="input" class="form-label">First Name</label>
              <input class="form-control" type="text" name="firstname" placeholder="First Name" aria-label="default input example">
              <label for="input" class="form-label">Last Name</label>
              <input class="form-control" type="text" name="lastname" placeholder="Last Name" aria-label="default input example">
              <br>
              <input class="form-control" type="text" name="Email" placeholder="Email" aria-label="default input example">
              <br>
              <input class="form-control" type="Submit"  name="send"aria-label="default input example">
          </form>
      </div>
    </div>
  </div>
</div>
</section>
<?php include 'footer.php';?>