<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>ONLINE LEARNING AND EARNING </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- fontawesome Link -->
    <link rel="stylesheet" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- ====FONTAWESOME FILE LINK====== -->
    <link rel="stylesheet" href="./assests/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">Online Learning and Earning</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Online Learning and Earning</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li>
            <a href="courses.php">Courses</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
            <?php

$conn = mysqli_connect('localhost','root','','capstone') or die(mysqli_error());
											$course_query = mysqli_query($conn,"select * from courses")or die(mysqli_error());
											while($row = mysqli_fetch_array($course_query)){
											$id = $row['id'];
											?>

<li><a href="web.php?course_name=<?php echo $row['course_name'];?>"><?php echo $row['course_name']; ?></a></li>

											
											<?php } ?> 



       
            </ul>
          </li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li>
            <a href="#">Log In</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="./userpanel/admin/index.php">Adminstrator</a></li>
              <li><a href="./userpanel/index.php">User</a></li>
              <li><a href="./userpanel/index.php">Teacher</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <!-- home section starts  -->