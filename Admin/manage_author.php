<?php
	require("functions.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"my project");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<title>manage_author</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
  		function alertMsg(){
  			alert(Book added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
    
    <style>
.bg{
	width:100%;
	height:100%;
	position:absolute;
	z-index:-1;
    opacity:1;
	
}
*{
	margin:0px;
	padding:0px;
	box-sizing:border-box;
}
/* .table-bordered{
    font-weight:bold;
    color:white;
    width:50px;
} */
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
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">

<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fa-solid fa-user fa-lg"></i> <b>My Profile</b>
  </button>
  <ul class="dropdown-menu">
  <li><a class="dropdown-item" href="view_profile.php"><i class="fa-solid fa-circle-user fa-lg"></i> View Profile</a></li>
    <li><a class="dropdown-item" href="edit_profile.php"><i class="fa-solid fa-pencil"style="color:MediumSeaGreen;"></i> Edit Profile</a></li>
    <li><a class="dropdown-item" href="change_password.php"><i class="fa-solid fa-unlock"></i> Change Password</a></li>
    <li><hr class="dropdown-divider"></li>
    
  </ul>
</div>

<a href="logout_confirm.php" class="btn btn-secondary"><b>Log Out</b> <i class="fa-solid fa-right-from-bracket"></i></a>
</ul>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
			  <a href="admin_dashboard.php" class="btn  btn-secondary "> <i class="fa-solid fa-cube fa-lg"></i> Dashboard</a>
		        
		      </li>
			  <div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fa-solid fa-book-open fa-lg"></i> Books
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="add_book.php">Add New Book</a></li>
    <li><a class="dropdown-item" href="manage_book.php">Manage Books</a></li>

  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fa-solid fa-layer-group fa-lg"></i> Category
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="add_cat.php">Add New Category</a></li>
    <li><a class="dropdown-item" href="manage_cat.php">Manage Category</a></li>

  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fa-solid fa-pen-to-square fa-lg"></i> Author
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="add_author.php">Add New Author </a></li>
    <li><a class="dropdown-item" href="manage_author.php">Manage  Author</a></li>

  </ul>
</div>
		     
		      
	          <li class="nav-item">
			  <a href="issue_book.php" class="btn btn-secondary">Issue Book</a>
		        
		      </li>
		    </ul>
		</div>
	</nav>

	<span class="maequee"><marquee><b>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span><br>

<div class="bg"
style=" background:rgba(0,0,0,0.5) url(../bg.jpg); 
background-blend-mode:darken;background-size:contain; "> 
    <br><br>
    <center><h4 class=" btn btn-dark"><b>Manage Author</b></h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered table-dark table-hover">
					<thead>
						<tr>
							<th>Author ID</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"my project");
						$query = "select * from authors";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['author_id'];?></td>
								<td><?php echo $row['author_name'];?></td>
								<td><button class="btn"><a href="edit_author.php?aid=<?php echo $row['author_id'];?>"><i class="fa-solid fa-pencil fa-lg"style="color:MediumSeaGreen;"></i> Edit</a></button>
								<button class="btn"><a href="delete_author.php?aid=<?php echo $row['author_id'];?>"><i class="fa-solid fa-trash-can fa-lg"style="color:red;"></i> Delete</a></button></td>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>

