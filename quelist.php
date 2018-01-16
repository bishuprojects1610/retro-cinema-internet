<?php
include('login.php');
$mysqli=Connect();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<title>CLUB_ TRAVIS_INDEX</title>
			<meta charset="utf-8">
			<meta name="viewport" type="text/css" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	         <link rel="stylesheet" href="css/newcss.css" type="text/css">
   </head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container"
		  <a class="navbar-brand" href="#">TRAVIS</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="startpage.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">About</a>
			  </li>
			<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Filter By</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			 <a class="dropdown-item" href="searchresult1.php?go='COST'">Cost</a>
			   <a class="dropdown-item" href="searchresult1.php?durate='DURATION'">Duration</a>
			  
			</div>
           </li>
		<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Welcome Viewrs</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="login2.php">Login</a>
			   <a class="dropdown-item" href="registration.php">SignUp</a>
			  
			</div>
           </li>
		   </ul>
			<form class="form-inline my-2 my-lg-0" method="post" action="searchresult1.php">
			  <input class="form-control mr-sm-2" type="text"  name="Search" placeholder="Search" aria-label="Search">
			  <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="Search" >Search</button>
			</form>
		</div>
	</div>
	 </nav>
	 <div class="jumbotron jumbotron-fluid">
	 <div>
		<video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
		<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
		<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
		</video>
		
     </div>
		
	  <div class="container">
		<h1 class="display-3">Meilleur Vidéos</h1>
		<p class="lead">There are no strange things here , just some visuals you haven't come across yet . Premium vedios of varied quality in minimum cost just for entertainment and knowledge.You would never stay bored so <b><i>stay tuned</i></b>.</p>
	  </div>
	</div>
	<div class="container">
	<div class="row">
	<?php
	$rows= 13;
	for ($j = 1 ; $j < $rows ; ++$j)
		{
			$mysqli=Connect();
			$sql="select sum(COPIES) as SUM from available where video_id='$j'";
			$result1=$mysqli->query($sql);
			$row1 = $result1->fetch_array(MYSQLI_ASSOC);
			
			$sql="CALL dispmovie('$j')";
			$result=$mysqli->query($sql);
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$img=$row['picloc'];
			$date=$row['release_date'];
			$tit=$row['title'];
			$des=$row['description'];
			$cost=$row['cost'];
			
			
			
	echo '<div class="card" id="'.$j.'" style="width: 15rem"  >
	    <h5>'.$tit.'</h5>
		<a href="prac1.php?cardid='. $j .'" ><img class="card-img-top" src="'.$img.'.jpg" width="100px" height="200px"alt="Card image cap"></a>
		  <div class="card-body">
			<p class="card-text">'.$des.'  <b>Release-'.$date.'</b></p>
			
			<p class="card-text">Cost-'.$cost.'</p>
			<p class="card-text">InStock-'.$row1['SUM'].'</p>
			
		  </div>
		</div>';
		$result->close();
		$mysqli->close();
	}
?>
       </div>
	</div>
	
	
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   
</body>				   
</html>
