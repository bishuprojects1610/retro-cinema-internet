<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studio HTML Blog</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link href="css/liststyle.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php

   include ('login.php');
   $mysqli=Connect();
   $error='';
  if(isset($_POST['Update']))
  {
	  $username=$_POST["username"];
	  $oldpassword=$_POST["oldpassword"];	
    $newpassword=$_POST["newpassword"];	
	$repeatpassword=$_POST["repeatpassword"];
	if($newpassword == $repeatpassword)
	{
		 $mysqli=Connect();
		 $sql="CALL updatepassword('$username' , '$oldpassword' , '$newpassword')";
		$result=$mysqli->query($sql);
		Header('Location:welcome.php');
		$mysqli->close();
	}
	else
	{
		$error='PASSWORDS DO NOT MATCH';
	}
	
  }
?>


<div id="tooplate_wrapper">
 <div id="tooplate_main">
        <h1>Hi,you searched for</h1>
    	<div id="tooplate_content">
		</div>
		<form action="transaction1.php" method="post">
		<div class="row">
							<div class="col-sm-6 form-group">
								<label>Username</label>
								<input type="text" placeholder="Enter your Username Here.." class="form-control" name="username">
							</div>
							<div class="col-sm-6 form-group">
								<label>PASSWORDS</label>
								<input type="password" placeholder="Enter Old password Here.." class="form-control" name="oldpassword" required>
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>NEW PASSWORD</label>
								<input type="password" placeholder="New Password" class="form-control" name="newpassword">
							</div>	
							<div class="col-sm-4 form-group">
								<label>REPEAT PASSWORD</label>
								<input type="password" placeholder="Repeat password" class="form-control" name="repeatpassword" required>
							</div>	
								
						</div>
						<ul class="list-inline">
						<li><input class="btn btn--form" type="submit" value="Update" name="Update"/></li>
						<li><a class="signup__link" href="welcome.php">cancel</a></li>
						</ul>
						<span><?php echo $error; ?></span>
		</div>
		</div>

</body>
</html>