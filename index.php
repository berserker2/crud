<!DOCTYPE html>
<html>
<head>
	<title>CRUD SYSTEM</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>My first bootstrap</h><br/>
					<button type="button" class = "btn btn-primary" data-toggle="modal" data-target="#addMember">
						Addmember
					</button>
				
					<!-- <button type="button" class = "btn btn-danger">cancel</button> -->
					<br></br>
					<?php
						require('./phplib/retrive.php');
						//var_dump($output);
					?>
					<table  class ="table">
						<tr>
							<th>Seq.</th>
							<th>ID</th>
							<th>FirstName</th>
							<th>LastName</th>
							<th>Contact</th>
						</tr>
						<?php
							$x=1;
							foreach($output['data'] as $row){
						?>
						<tr>
							<td><?php echo $x; ?></td>
							<td><?php echo $row[0]; ?></td>
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
							<td><?php echo $row[3]; ?></td>
						</tr>
						<?php
							$x++;
							}
						?>
					</table>
			</div>
	</div>
</div>

	<div class="modal fade" role="dialog" id="addMember">
		<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-header">
						Please Input Member Data :
					</div>
					<form method="POST" action="phplib/create.php">
						<div class="modal-body">
							ID : <input type="TEXT" name="id"><br>
							Fname : <input type="TEXT" name="fname"><br>
							Lname : <input type="TEXT" name="lname"><br>
							Contact : <input type="TEXT" name="contact"><br>
						</div>
					
						<div class="modal-footer">
							<input type="submit" value="SUNMIT">
							<input type="reset" value="RESET">
						</div>
					</form>
			</div>
		</div>
	</div>
	<!-- jquery plugin -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



</body>
</html>
