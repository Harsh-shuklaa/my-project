<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"my project");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$address = $row['address'];
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>library management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
	<style>
.bg{
	width:100%;
	height:100%;
	position:absolute;
	z-index:-1;
    opacity:1;
	
}
.form-group{
    color:white;
    font-weight:bold;
}

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php">Library Management System (LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    My Profile
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="view_profile.php">View Profile</a></li>
    <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
    <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>

<a href="logout.php" class="btn btn-secondary">logout</a>
</ul>
		</div>
	</nav>
	<span class="maequee"><marquee><b>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span><br>

<div class="bg"
style=" background:rgba(0,0,0,0.5) url(bg.jpg); 
background-blend-mode:darken;background-size:contain; "> <br><br><br> 

    <center><h3 class="btn btn-primary">Student Profile Detail</h3><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form>
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" value="<?php echo $email;?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<label for="mobile">Mobile:</label>
						<input type="text" value="<?php echo $mobile;?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<label for="email">Address:</label>
						<input type="text" value="<?php echo $address;?>" class="form-control" disabled>
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>