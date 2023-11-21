<?php
session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		 <?php  include 'css/style.php' ?> 
		<?php  include 'links/links.php' ?>
	</head>
	<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$eventname = mysqli_real_escape_string($con, $_POST['eventname']) ;
	$time = mysqli_real_escape_string($con, $_POST['time']) ;
	$venue = mysqli_real_escape_string($con, $_POST['venue']) ;
	$description = mysqli_real_escape_string($con, $_POST['description']) ;
	$image = mysqli_real_escape_string($con, $_POST['image']) ;

	// $pass = password_hash($description, PASSWORD_BCRYPT);
	// $cpass = password_hash($image, PASSWORD_BCRYPT);

	// $emailquery = " select * from registration where time='$time' ";
	// $query = mysqli_query($con,$emailquery);

	// $emailcount = mysqli_num_rows($query);

	// if($emailcount>0){
	// 	echo "time already exists";
	// }else{
	// 	if($description === $image){

			$insertquery = "insert into registration( event name, time, venue, description, image) values('$event name','$time','$venue','$pass','$cpass')";

			$iquery = mysqli_query($con, $insertquery);

			if($iquery){
					?>
						<script>
							alert("Inserted Successful");
						</script>
					<?php
				}else{

					?>
						<script>
							alert("NO Inserted ");
						</script>
					<?php
				}

		}else{
			?>
				<script>
					alert("Password are not matching ");
						</script>
					<?php
		}
	





?>


		<div class="card bg-light">
		<!-- <article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get started with your free account</p>
			<p>
				<a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i>   Login via Gmail</a>
				<a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i>   Login via facebook</a>
			</p>
			<p class="divider-text">
				<span class="bg-light">OR</span> -->
			<!-- </p> -->
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="eventname" class="form-control" placeholder="Full name" type="text" required>
					</div> <!-- form-group// -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						</div>
						<input name="time" class="form-control" placeholder="Email address" type="time" required>
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
							</div>
							<input name="venue" class="form-control" placeholder="Phone number" type="number" required>
							</div> <!-- form-group// -->
							
							<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
								</div>
								<input class="form-control" placeholder="Create description" type="description" name="description" value="" required>
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
									</div>
									<input class="form-control" placeholder="Repeat description" type="description" name="image" required>
									</div> <!-- form-group// -->
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-primary btn-block"> ADD  </button>
										</div> <!-- form-group// -->
										<!-- <p class="text-center">Have an account? <a href="login.php">Log In</a> </p> -->
									</form>
								</article>
								</div> <!-- card.// -->
							</div>
							
						</div>
					</div>

			</body>
		</html>