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
               Welcome Viewrs</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="login2.php">Login</a>
			   <a class="dropdown-item" href="login1.php">SignUp</a>
			  
			</div>
           </li>
		   </ul>
				<form class="form-inline my-2 my-lg-0" method="post" action="searchresult1.php?go=">
			  <input class="form-control mr-sm-2" type="text"  name="Search" placeholder="Search" aria-label="Search">
			  <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" value="Search" >Search</button>
			</form>
			</div>
	   </div>
	 </nav>
<div id="tooplate_wrapper">
 <div id="tooplate_main">
        <h1>Hi,you searched for</h1>
    	<div id="tooplate_content">
		<ul>
<?php
include ('login.php');
 $mysqli=Connect();
 if(isset($_POST['search']))
 { 
       $search=$_POST["Search"];
		 
		   $sql="Select *
		       from movie 
			   where title like '%" . $search . "%' or description like '%" . $search . "%' LIMIT 5";
 }
 else
 {
	 if(isset($_GET['go']))
    { 
	  $sql="SELECT * FROM `movie` order by cost asc LIMIT 7";
     }
	  if(isset($_GET['durate']))
    {
		$sql="SELECT * FROM `movie` order by DURATION asc LIMIT 7";
	}
 }
		  
	          $result=$mysqli->query($sql);
		if($result!=null)
		{
			
		$rows=$result->num_rows;
		for ($j = 0 ; $j < $rows ; ++$j)
		{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$cardid=$row['mov_id'];
		$title= $row['title'];
		$des= $row['description'];
		$loc=$row['picloc'];
		
		if($j%2==0)
		{
		echo '<div class="cbox_fw">
            	<h2> <a href="prac1.php?cardid='. $cardid .'">' .$title. '</a></h2>
                <div class="image_frame image_fr"><span></span><img src='.$loc.'.jpg alt="image 4" ></div>
				<p>'. $des .'.  </p>
				<p>Duration:'. $row['DURATION'] .'. hrs </p>
				<p>Cost:'. $row['cost'] .'. Rs </p>
				<p>Release Date'. $row['release_date'] .'.  </p>
                <div class="cleaner h10"></div> </div>';
		}
		else
			echo '<div class="cbox_fw">
            	<h2> <a href="prac1.php?cardid='. $cardid .'">' .$title. '</a></h2>
                <div class="image_frame image_fl"><span></span><img src='.$loc.'.jpg alt="image 4" ></div>
				<p>'. $des .'.  </p>
				<p>Duration:'. $row['DURATION'] .'. hrs</p>
				<p>Cost:'. $row['cost'] .'. Rs  </p>
				<p>Release Date'. $row['release_date'] .'.  </p>
                <div class="cleaner h10"></div> </div>';
		}
	}
		$result->close();
		$mysqli->close();
?>
 </ul>
          </div> 
    </div> 
</div>

<div id="tooplate_footer_wrapper">
    <div id="tooplate_footer">
        Copyright © 2072 <a href="#">Your Company Name</a>
        <div class="cleaner"></div>
    </div>
</div>

</body>
</html>