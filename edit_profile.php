<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"my project");
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" /> 
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
    font-weight:bold;
	color:white;
}
.btn{
	/* background-color: blueviolet; */
	margin: 8px;
	/* width: 120px; */
	font-weight : bold;
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
  <i class="fa-solid fa-user fa-lg"></i> <b> My Profile</b>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="view_profile.php"><i class="fa-solid fa-circle-user fa-lg"></i> View Profile</a></li>
    <li><a class="dropdown-item" href="edit_profile.php"><i class="fa-solid fa-pencil"style="color:MediumSeaGreen;"></i> Edit Profile</a></li>
    <li><a class="dropdown-item" href="change_password.php"><i class="fa-solid fa-unlock"></i> Change Password</a></li>
    <li><hr class="dropdown-divider"></li>
 
  </ul>
</div>

<a href="Admin/logout_confirm.php" class="btn btn-secondary">Log Out <i class="fa-solid fa-right-from-bracket"></i></a>
</ul>
		</div>
	</nav>
	<!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
			  <a href="user_dashboard.php" class="btn btn-dark " style="margin:2px;"> <i class=" icon fa-solid fa-cube fa-lg"></i> Dashboard</a>
</ul>
		      </li>
</div>
</nav> -->
	<span class="maequee"><marquee><b>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span><br>

	 <div class="bg"
	 style=" background:rgba(0,0,0,0.5) url(bg.jpg); 
	background-blend-mode:darken;background-size:contain; "> <br><br>
    <center><h4 class="btn btn-dark"><b>Edit Profile</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="update.php" method="post">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" value="<?php echo $name;?>">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" name="email" class="form-control" value="<?php echo $email;?>">
					</div>
					<div class="form-group">
						<label for="mobile">Mobile:</label>
						<input type="text" name="mobile" class="form-control" value="<?php echo $mobile;?>">
					</div>
					<div class="form-group">
						<label for="mobile">Address:</label>
						<textarea rows="3" cols="40" name="address" class="form-control"><?php echo $address;?></textarea>
					</div>
                    <br>
            <button name ="update" class="btn btn-primary">Update</button>
		
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>