 <?php
    //  $server = "localhost";
    // //  $username ="root";
    //  $password ="";

    //  $con = mysqli_connect($server,$username,$password);

    //  if(!$con){
    //     die ("connection to this database failed due to".mysqli_connect_error());
    //  }
    // //  echo "success connecting to the db";
 
    //  $name  = $_POST['name']
    //  $email = $_POST['email']
    //  $password  = $_POST['password']
    //  $mobile = $_POST['mobile']
    //  $address = $_POST['address']
    
    //  $sql = " INSERT INTO `users` ( `name`, `email`, `password`, `mobile`, `address`) VALUES
    //  ('$name','$email','$password','$address');"

    
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"my project");
	$query = "insert into users values('','$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
?> 
<script type="text/javascript">
	alert("Registration successfull...You may Login now !!");
	window.location.href = "index.php";
</script>
