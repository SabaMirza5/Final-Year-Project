	<?php include('dbcon.php'); ?>
	<form action="delete_student.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="">
					<a href="students.php">All</a>
				</li>
				<li class="">
					<a href="unreg_students.php">Unregistered</a>
				</li>
				<li >
				<a href="reg_students.php">Registered</a>
				</li>
				
<li class="active">
				<a href="applystudents.php">Applied</a>
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
				
					<th>First name</th>
					<th>Last Name</th>
			
					<th>q1</th>
					<th>q2</th>
					<th>q3</th>
					<th>q4</th>
					<th>q5</th>
					<th>status</th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"SELECT * FROM `enrollquiz` WHERE status = '1'") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['firstname']; ?></td> 
		<td><?php echo $row['lasttname']; ?></td> 
	
		<td width="100"><?php echo $row['q1']; ?></td> 
		<td width="100"><?php echo $row['q2']; ?></td>
		<td width="100"><?php echo $row['q3']; ?></td>
		<td width="100"><?php echo $row['q4']; ?></td>
		<td width="100"><?php echo $row['q5']; ?></td>
		<td width="100"><?php echo $row['status']; ?></td> 
	
		<td width="30"><a href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>