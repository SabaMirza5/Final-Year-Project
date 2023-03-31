<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('subject_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add Subject</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="subjects.php"><i class="icon-arrow-left"></i> Back</a>
									    <form class="form-horizontal" method="post"  enctype="multipart/form-data">


										<div class="control-group">
								<div class="controls">
									<input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
								</div>
								</div>


								<div class="control-group">
											<label class="control-label" for="inputEmail">Course Code</label>
											<div class="controls">
											<input type="text" name="course_code" id="inputEmail" placeholder="Course Rating">
											</div>
										</div>

								
								<div class="control-group">
											<label class="control-label" for="inputEmail">Course Rating</label>
											<div class="controls">
											<input type="text" name="course_rating" id="inputEmail" placeholder="Course Rating">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Course Title</label>
											<div class="controls">
											<input type="text" class="span8" name="course_name" id="inputPassword" placeholder="Course Title" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="course_description" id="ckeditor_full"></textarea>
											</div>
										</div> 
										<div class="control-group">
											<label class="control-label" for="inputPassword">Course Hours</label>
											<div class="controls">
											<input type="text" class="span8" name="course_hours" id="inputPassword" placeholder="Course Title" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Course Months </label>
											<div class="controls">
											<input type="text" class="span8" name="course_month" id="inputPassword" placeholder="Course Title" required>
											</div>
										</div>
								
											<div class="control-group">
											<label class="control-label" for="inputPassword">Course Modules</label>
											<div class="controls">
												<select name="course_mod">
													<option></option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
												</select>
											</div>
										</div>
								
									
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['save'])){



											$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
											$image_name = addslashes($_FILES['image']['name']);
											$image_size = getimagesize($_FILES['image']['tmp_name']);
			
											move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
											$location = "uploads/" . $_FILES["image"]["name"];
											
											$course_rating = $_POST['course_rating'];
											$course_name = $_POST['course_name'];
											$course_description = $_POST['course_description'];
											$course_hours = $_POST['course_hours'];
											$course_month = $_POST['course_month'];
											$course_mod = $_POST['course_mod'];	
											$course_code = $_POST['course_code'];	
										
										
										
										$query = mysqli_query($conn,"select * from courses where course_name = '$course_name' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);

										if ($count > 0){ ?>
										<script>
										alert('Data Already Exist');
										</script>
										<?php
										}else{
										mysqli_query($conn,"INSERT INTO `courses`( `course_code`,`course_image`, `course_rating`, `course_name`, `course_description`, `course_hours`, `course_month`, `course_mod`) values(' $course_code','$location','$course_rating','$course_name','$course_description','$course_hours','$course_month','$course_mod')")or die(mysqli_error());
										
										
										mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Subject $course_name')")or die(mysqli_error());
										
										
										?>
										<script>
										window.location = "subjects.php";
										</script>
										<?php
										}
										}
										
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>