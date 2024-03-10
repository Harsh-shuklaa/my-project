<?php
	session_start();
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
body{
	width:100%;
	height:100%;
}
.bg{
	width:100%;
	height:100%;
	position:absolute;
	z-index:-1;
    opacity:1;
	
}
.facilities{
	color:BLACK;
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

/*  body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f3f3;
        }  */
		 .card {
            width: 300px;
            height: 400px;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: box-shadow 0.3s ease;
            background-color: white;
        }

        .card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
		    background: linear-gradient(45deg, #ff7e5f, #feb47b); 
            opacity: 0;
            transition: opacity 0.5s ease, transform 0.5s ease;
            transform: scale(1.2);
        }

        .card:hover .gradient {
            opacity: 1;
            transform: scale(1);
        }

        .content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            z-index: 1;
        }

        h2 {
            margin: 0;
            font-size: 1.5em;
        }

        p {
            margin: 10px 0 0;
            font-size: 0.9em;
        }
		 footer{
    background-color: black;
	margin-top: 200px;

}
.footercontaine{
 width:100%;
 padding: 70px 30px 20px;
}
.socialIcons{
    display: flex;
    justify-content: center;
}
.socialIcons a{
    text-decoration: none;
    padding: 10px;
    background-color: white;
    margin: 10px;
    border-radius: 50%;

}
.socialIcons a i{
    font-size: 2em;
    color: black;
    opacity: 0.9;

}
/*hover effect */
 .socialIcons a:hover{
    background-color: #111;
    transition: 0.5s;
}
.socialIcons a:hover{
    color: white;
    transition: 0.5s;

}
.footernav{
    margin: 30px 0;
}
.footernav ul{
    display: flex;
    justify-content: center;
}
.footernav ul li a{
    color: white;
    margin: 20px;
    text-decoration: none;
    font-size: 1.3em;
    opacity: 0.7;
    transition:0.5s;
}
.footernav ul li a:hover{
    opacity: 1;
}
.footerBottom{
    background-color: grey;
    padding: 20px;
    text-align: center;
}
.footerBottom p{
    color: black;
	font-weight:bold;
}
.designer{
    opacity: 0.7 ;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 400;
    margin: 0px 5px;

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
	
       
		<div class= " col-md-4" id="side_bar">

		<div class="card" onmousemove="handleMouseMove(event)"
        onmouseout="handleMouseOut()">
        <div class="gradient" id="gradient"></div>
        <div class="content">
		<div class="facilities"> 
			<h5 class="facilities">Library Timing <i class="fa-solid fa-clock-rotate-left fa-lg"></i></h5>
			<ul>
				<li><i class="fa-solid fa-hourglass-start fa-lg"></i> Opening: 8:00 AM</li>
				<li><i class="fa-solid fa-hourglass-start fa-lg"></i> Closing: 8:00 PM</li>
				<li><i class="fa-solid fa-hourglass-start fa-lg"></i> (Sunday Off)</li>
			</ul>
			<h5 class="facilities">What We provide ?</h5>
			<ul>
				<li><i class="fa-regular fa-star"></i> Full furniture</li>
				<li><i class="fa-regular fa-star"></i> Free Wi-fi</li>
				<li><i class="fa-regular fa-star"></i> News Papers</li>
				<li><i class="fa-regular fa-star"></i> Discussion Room</li>
				<li><i class="fa-regular fa-star"></i> RO Water</li>
				<li><i class="fa-regular fa-star"></i> Peacefull Environment</li>
			</ul>
		</div>
	
	</div>
	</div>
	</div>
 
    <script>
        const card = document.querySelector('.card');
        const gradient = document.getElementById('gradient');

        function handleMouseMove(event) {
            const { offsetX, offsetY } = event;
            const percentX = offsetX / card.clientWidth * 100;
            const percentY = offsetY / card.clientHeight * 100;

            gradient.style.background = `radial-gradient(circle at ${percentX}% ${percentY}%, #8A2BE2, #C0C0C0)`;
            gradient.style.opacity = 1;
        }

        function handleMouseOut() {
            gradient.style.opacity = 0;
        }
    </script>
		<div class= " col-md-2"> </div>
        <div class= "col-md-6 " id="main_content">
			<div class="facilities">

        <center><h3 class="facilities" style=" color:white;"> <b> <i class="fa-solid fa-id-card fa-lg"></i> REGISTRATION</b></h3></center>

			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name" style=" color:white;">Full Name:</label>
					<input type="text"placeholder="Enter your name :" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email" style=" color:white;">Email ID:</label>
					<input type="text" name="email"placeholder="Enter your e-mial id :" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password" style=" color:white;">Password:</label>
					<input type="password" name="password"placeholder="Enter your password:" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="mobile" style=" color:white;">Mobile:</label>
					<input type="text" name="mobile"placeholder="Enter your mobile no. :" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="address" style=" color:white;">Address:</label>
					<textarea name="address"placeholder="Enter your full address :" class="form-control" required></textarea> 
				</div><br>
				<button type="submit "name ="register" class="btn btn-secondary">Register <i class="fa-solid fa-hand fa-lg"></i></button>
				<a href="index.php" class="Not-registered-yet "> Already registered ?</a>	
					
			</form>

</div>
	</div>
	</div>
	
		<footer>
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
    </footer>
			
    




			</div>
			
  </body>
</html>	