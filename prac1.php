<?php
if(isset($_GET['cardid'])){
$ids = $_GET['cardid'];
     }
    if(!empty($ids)){
			
		require_once 'login.php';
		$mysqli  = Connect();
		?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
	<title>Current Video Watching</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
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
			  
		
         
		   </ul>
			<form class="form-inline my-2 my-lg-0" method="post" action="searchresult1.php?go=">
			  <input class="form-control mr-sm-2" type="text"  name="Search" placeholder="Search" aria-label="Search">
			  <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" value="Search" >Search</button>
			</form>
			</div>
	   </div>
	 </nav>
     </div>
<?php
         if ($mysqli->connect_errno) {
				echo "<p>Connect failed:</p>", $mysqli->connect_error;
				exit();
			}
			else
			{
		   $sql="Select *
		         from movie 
				 where mov_id='$ids'";			
				 
			if(!$mysqli->query($sql)){
			echo "Echo:".$sql."<br>".$mysqli->error;
			}
            else{
				$result=$mysqli->query($sql);
				$info=$result->fetch_assoc();
			   $id=$info['mov_id'];
				$vid = $info['vidloc'];
				$title1 = $info['title'];
				$description1 = $info['description'];
				
			
			}}}
			else{
				echo "IDENTITY SHOULD NOT BE EMPTY";
				die();
			}
			?>
<div class="container">
	  
      <div class="videoplay">
		  <video width="650" height="450" controls>
		  <source src="<?php echo $vid; ?>.mp4" type="video/mp4">
		  <source src="movie.ogg" type="video/ogg">
		Your browser does not support the video tag.
		</video>
	  <h3><?php echo $title1; ?></h3>
				  <div class="actions">
				     <div class="add/remove">
				    
					 <?php echo '<a href="favor.php?cardid='.$id.' " ><button  class="purple button" name="Favorites" value="Favorites" >Favorites</button></a>'; ?>
							
							</div>
				   </div>
				  <p class="desciption"><?php echo $description1; ?>  </p>
				  
				<p class="actors">Starring::<ul class="actors">
				                                         <?php 
														  $sql="select distinct * from actors  where movie_id='$ids'";
															$result=$mysqli->query($sql);
														  if($result!=null)
															{
															$rows=$result->num_rows;
															for ($j = 0 ; $j < $rows ; ++$j)
															{
															$result->data_seek($j);
															$row = $result->fetch_array(MYSQLI_ASSOC);
															$fname=$row['FNAME'];
															$lname= $row['LNAME'];
					
															echo 
				                                              '<li> '.$fname.' '.$lname.'</li>';
														    }
															}
																$mysqli->close();	
															 ?></ul></p>
				 <?php echo '<a href="transaction.php?cardid='.$id.' " ><button  class="purple button" name="Buy" value="Buy" >Buy</button></a>'; ?>
				  <div class="ratings">
				  
				  <ul class="row">
				  <li <span class="oi" data-glyph="star"> </span></li>
				</div>
		</div>
</div>
</body>
</html>