<?php
 
 include ('login.php');
 $mysqli=Connect();
 session_start();
  $error='';
  if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    
     if (empty($_POST['username']) || empty($_POST['password'])) 
	 {
     $error = "Username or Password is invalid";
    }
	else
	{
   

    $myusername = $mysqli->real_escape_string($_POST['username']);
      $mypassword = $mysqli->real_escape_string($_POST['password']); 
	 
   
	 $sql = "SELECT * FROM customer WHERE username = '$myusername' and password = '$mypassword'";
 $result = $mysqli->query($sql);
      $row = $result->fetch_array(MYSQLI_ASSOC);
	     $active = $row['email_id'];
       $id=$row['cust_id']; 
      $count = $result->num_rows;
	   
	if($count == 1)
	{
		$_SESSION['login_user']=$id;
		header('Location: welcome.php'); 
	}else{
	$error = "Username or Password is invalid";
	}
}
}
?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Spectre sign up form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/newcss1.css">
	  </head>
<body>
 <div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
     
	  
	  
	  <h1 class="logo__text">CLUB_TRAVIS</h1>
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Welcome to CLUB_TRAVIS.</h1>
      <h2 class="heading--secondary">Are you ready to join the Us?</h2>
	  
	  
	  
    </div>
    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="http://alexdevero.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
        <li><a href="https://www.behance.net/alexdevero" target="_blank"><fa class="fa fa-behance"></fa></a></li>
        <li><a href="https://github.com/alexdevero" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="https://twitter.com/alexdevero" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
  
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="name" placeholder="username" required />
      </div>
   
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
      </div>
	  
	  <span><?php echo $error; ?></span>
   
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Login"/>
          </li>
         
        </ul>
      </div>
    </form>  
  </div>
</div>
  
  
</body>
</html>
