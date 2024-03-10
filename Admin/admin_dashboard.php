<?php
	 require("functions.php");
	session_start();
?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<title>Admin dashboard</title>
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
*{
	margin:0px;
	padding:0px;
	box-sizing:border-box;
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
  <i class="fa-solid fa-user fa-lg"></i> My Profile
  </button>
  <ul class="dropdown-menu">
  <li><a class="dropdown-item" href="view_profile.php"><i class="fa-solid fa-circle-user fa-lg"></i> View Profile</a></li>
    <li><a class="dropdown-item" href="edit_profile.php"><i class="fa-solid fa-pencil"style="color:MediumSeaGreen;"></i> Edit Profile</a></li>
    <li><a class="dropdown-item" href="change_password.php"><i class="fa-solid fa-unlock"></i> Change Password</a></li>
    <li><hr class="dropdown-divider"></li>
    <!-- <li><a class="dropdown-item" href="#">Separated link</a></li> -->
  </ul>
</div>

<a href="logout_confirm.php" class="btn btn-secondary">logout <i class="fa-solid fa-right-from-bracket"></i></a>
</ul>
		</div>
	</nav>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
			  <a href="admin_dashboard.php" class="btn  "> <i class="fa-solid fa-cube fa-lg"></i> Dashboard</a>
		        
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
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
	
    <br>
	<br>
    <div class="row">
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered User</div>
				<div class="card-body">
					<p class="card-text">No. total Users: <?php echo get_user_count();?></p>
					<a class="btn btn-danger" href="Regusers.php" target="_blank">View Registered Users <i class="fa-solid fa-eye"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Total Book <i class="fa-solid fa-book-open fa-lg"></i></div>
				<div class="card-body">
					<p class="card-text">No. of books available: <?php echo get_book_count();?></p>
					<a class="btn btn-success" href="Regbooks.php" target="_blank">View All Books <i class="fa-solid fa-eye"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Book Categories <i class="fa-solid fa-layer-group fa-lg"></i></div>
				<div class="card-body">
					<p class="card-text">No. of Book's Categories: <?php echo get_category_count();?></p>
					<a class="btn btn-warning" href="Regcat.php" target="_blank">View Categories <i class="fa-solid fa-eye"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">No. of Authors <i class="fa-solid fa-pen-to-square fa-lg"></i></div>
				<div class="card-body">
					<p class="card-text">No. of Authors: <?php echo get_author_count();?></p>
					<a class="btn btn-primary" href="Regauthor.php" target="_blank">View Authors <i class="fa-solid fa-eye"></i></a>
				</div>
			</div>
		</div>
	</div><br><br>
	<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Book Issued <i class="fa-solid fa-book-open fa-lg"></i></div>
				<div class="card-body">
					<p class="card-text">No. of book issued: <?php echo get_issue_book_count();?></p>
					<a class="btn btn-info" href="view_issued_book.php" target="_blank">View Issued Books <i class="fa-solid fa-eye"></i></a>
				</div>
			</div>
		</div>
	
		<div class="col-md-4"></div>
	</div>
</body>
</html>	
