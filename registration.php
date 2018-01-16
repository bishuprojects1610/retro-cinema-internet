<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>TRAVIS_SIGN UP FORM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	 <link rel="stylesheet" href="css/regcss.css">
	 
	 </head>

<body>

<?php

   include ('login.php');
   $mysqli=Connect();
   
  if(isset($_POST['Register']))
  {
	 $name=$_POST["name"];
	$cust_id=$_POST["cust_id"];
	$mem=$_POST["mem"];
	$phone=$_POST["contact"];
    $email=$_POST["email"];
	$loc=$_POST["loc"];
    $username=$_POST["username"];
    $password=$_POST["password"];	
	$reppassword=$_POST["repeatpassword"];
	
	  if($password==$reppassword){
    $sql ="INSERT INTO `customer` (`membership_type`, `cust_id`, `first_name`, `contact`, `email_id`,  `username`, `password`, `pic`) VALUES ('$mem', '$cust_id', '$name', '$phone', '$email', '$username', '$password', '$loc')";
      $result = $mysqli->query($sql);
	  Header('Location:login2.php');
	  }
	  else{
	  echo "THE TWO PASSWORDS DO NOT MATCH";
	  }
	  
  }
?>
  <div class="container log">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="registration.php" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Name</label>
								<input type="text" placeholder="Enter your Name Here.." class="form-control" name="name">
							</div>
							<div class="col-sm-6 form-group">
								<label>PASSWORDS</label>
								<input type="text" placeholder="Enter password Here.." class="form-control" name="password" required>
							</div>
						</div>					
					
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>MEMBERSHIP TYPE</label>
								<input type="text" placeholder="PRIME/NON PRIME" class="form-control" name="mem">
							</div>	
							<div class="col-sm-4 form-group">
								<label>CUSTOMER_ID</label>
								<input type="text" placeholder="CUSTOMER_nn" class="form-control" name="cust_id" required>
							</div>	
								
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Username</label>
								<input type="text" placeholder="USERNAME" class="form-control" name="username" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Repeatpassword</label>
								<input type="text" placeholder="REPEAT PASSWORD" class="form-control" name="repeatpassword" required>
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" placeholder="9908786590" class="form-control" name="contact">
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" placeholder="email.###@site.com" class="form-control" name="email" required>
					</div>	
					<div class="form-group">
						<label>PIC location</label>
						<input type="text" placeholder="Enter pic location  Here.." class="form-control" name="loc">
					</div>	
					
					  <div class="m-t-lg">
				<ul class="list-inline">
				  <li>
					<input class="btn btn--form" type="submit" value="Register" name="Register"/>
				  </li>
				  <li>
					<a class="signup__link" href="login2.php">I am already a member</a>
				  </li>
				</ul>
			  </div>
					</div>
				</form> 
				</div>
	</div>
	</div>
	</body>
	</html>