<?php include 'header.php';?>
<!-- about us page  section starts  -->
<section class="web" id="web">
    <h2>Our Popular Courses</h2>
</section>
<!-- course section starts  -->

<section class="course" id="course">

    <h1>Our Popular Courses</h1>    
    
    <div class="box-container">
    
    <?php

$conn = mysqli_connect('localhost','root','','capstone') or die(mysqli_error());
											$course_query = mysqli_query($conn,"select * from courses")or die(mysqli_error());
											while($row = mysqli_fetch_array($course_query)){
											$id = $row['id'];
											?>

<div class="box">
      <img src="./userpanel/admin/<?php echo $row['course_image']; ?>" alt="">
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half"></i>
          </div>
          <a href="web.html" class="title"><?php echo $row['course_name']; ?></a>
          <p><?php echo $row['course_description']; ?></p>
          <div class="info">
              <h3> <i class="far fa-clock"></i> <?php echo $row['course_hours']; ?> Hours</h3>
              <h3> <i class="far fa-calendar-alt"></i> <?php echo $row['course_month']; ?> Months</h3>
              <h3> <i class="fas fa-book"></i><?php echo $row['course_mod']; ?> Modules</h3>
          </div>
      </div>
  </div>

											
											<?php } ?> 
    
    </div>
    
    </section>
    
    <!-- course section ends -->
    
    <?php include 'footer.php';?>
    