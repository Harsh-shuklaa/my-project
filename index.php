<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<title>Admin login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
	
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		 /* background-color: whitesmoke;  */
		 opacity:2;
	}
	#side_bar{
		 /* background-color: whitesmoke;  */
		 opacity: 1;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
	 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap'); 
*{  
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.bg{
	width:100%;
	height:100%;
	position:absolute;
	z-index:-1;
    opacity:1;
	
}
.facilities{
	color:white;
	font-weight: bold;
}
.Not-registered-yet {
	color: white;
	font-weight : bold;
}
.btn{
	background-color:blueviolet;
	margin:8px;
	/* width: 120px; */
	font-weight : bold;
}
 .alert-danger{
	color : orange;
	
} 



</style>
<body>



	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
			</div>

	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
			  <a href="Admin/index.php" class="btn btn-secondary"><i class="fa-solid fa-user-tie fa-lg"></i> Admin login</a>
		        
		      </li>
		      <li class="nav-item">
			  <a href="index.php" class="btn btn-secondary"><i class="fa-sharp fa-solid fa-users"></i>  User login</a>
		      </li>
		      <li class="nav-item" >
			  <a href="signup.php" class="btn btn-secondary"><i class="fa-solid fa-id-card fa-lg"></i> Register</a>
		        
		      </li>
		    </ul>
		</div> 
	 </nav>
	 <span class="maequee"><marquee><b>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span><br>

<div class="bg"
style=" background:rgba(0,0,0,0.7) url(bg.jpg); 
background-blend-mode:darken;background-size:contain; "> 
	<div class="row">
	

		<div class= "  col-md-4" id="side_bar">
			
	<div class="facilities">
			<h5 class="facilities">Library Timing</h5>
			<ul>
				<li>Opening: 8:00 AM</li>
				<li>Closing: 8:00 PM</li>
				<li>(Sunday Off)</li>
			</ul>
			<h5 class="facilities">What We provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>
	
		</div>
		<div class= "  col-md-2"></div>
		<div class= "  col-md-6" id="main_content">
			<div class="facilities">
		   <center><h3 class="facilities" ><b><i class="fa-sharp fa-solid fa-users"></i>  Login </b> </h3></center>
			<form action="" method="post"><br>
				
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input  type="text" name="email" placeholder="Enter your e-mail id:" class="form-control" required>
				</div><br>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password"placeholder="Enter your password:" class="form-control" required>
				</div>
</div>
				<br>
				<button type="submit "name ="login" class="btn btn-secondary">LOGIN <i class="fa-solid fa-hand"></i></button>
                 <a href="signup.php" class="Not-registered-yet "> Not registered yet ?</a>	  
           </form>
					
			<?php 

				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"my project");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);


					// $connection = mysqli_connect("localhost","root","");
					// $db = mysqli_select_db($connection,"my project");
					// $query = "select * from users where email = '$_POST[email]'";
					// $query_run = mysqli_query($connection,$query);
					 while ($row = mysqli_fetch_assoc($query_run)) {
					 	if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
					 			$_SESSION['name'] =  $row['name'];
					 			$_SESSION['email'] =  $row['email'];
					 			$_SESSION['id'] =  $row['id'];
					 			header("Location: user_dashboard.php");
						}
							else{
								?>
								<div>

								<br><br><center><span class="alert-danger"><i class="fa-solid fa-triangle-exclamation fa-lg"></i><b> Wrong Password !!</b></span></center></div>
								<?php
							}
						}
					}
				}
			?>
		<!-- <footer>
        <div class="footercontainer col-md-12">
            <div class="socialIcons">
                <a href=""><i class = "fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/the.ogboyz?igsh=YzljYTk1ODg3Zg=="><i class = "fa-brands fa-instagram"></i></a>
                <a href=" https://x.com/Rishabh7098?t=c9XLshDdrJphEhommcjDAA&s=08 "><i class = "fa-brands fa-twitter"></i></a>
                <a href="https://www.skoolbeep.com/blog/library-management-system/#:~:text=Library%20management%20systems%20are%20designed,the%20activity%20to%20be%20performed."><i class = "fa-brands fa-google-plus"></i></a>
                <a href="https://www.youtube.com"><i class = "fa-brands fa-youtube"></i></a>
                
            </div>
            <div class="footernav col-md-12">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="https://news.google.co.in">News</a></li>
                    <li><a href="https://www.skoolbeep.com/blog/library-management-system/#:~:text=Library%20management%20systems%20are%20designed,the%20activity%20to%20be%20performed.">About</a></li>
                    <li><a href="call 7206356421">Contact Us</a></li>
                    <li><a href="https://www.instagram.com/the.ogboyz?igsh=YzljYTk1ODg3Zg==">Our Team</a></li>      
                </ul>
            </div>
        </div>
        <div class="footerBottom col-md-12">
            <p>Copyrights &copy;2024;Designed by <span class="designer">Brahman Corporation</span></p>
        </div>
    </footer> -->
			
    




			</div>
			
  </body>
</html>		
