<?php
			   include('login.php');
			   $mysqli=Connect();
			   session_start();
			  $user_check = $_SESSION['login_user'];
			  $sql="SELECT  *
						   FROM customer 
						   WHERE cust_id='$user_check'";
						   
					$result=$mysqli->query($sql);
			   $row =  $result->fetch_array(MYSQLI_ASSOC);
			   
		        $login_sessionuser =$row['first_name'];
	           $login_sessionemail =$row['email_id'];
			   $login_user_id =$row['cust_id'];
			   $login_userpic=$row['pic'];
			   if(!isset($_SESSION['login_user'])){
					  header("location:login2.php");
				   }
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Brown Field - Blog</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<div id="tooplate_wrapper">
   <div id="tooplate_middle">
    	<div id="mid_slider">
        	<div id="flash_grid_slider">
               
                    <img src="<?php echo $login_userpic; ?>.jpg" width="300px" height="250px" alt="Get Adobe Flash player" class="img-circle"/>
                </div>
			</div>
        <div id="mid_left">
            <div id="mid_title">
                HI.....<?php  echo $login_sessionuser;  ?>
            </div>
            <p>Love myself I do. Not everything, but I love the good as well as the bad. 
			I love my crazy lifestyle, and I love my hard discipline. 
			I love my freedom of speech and the way my eyes get dark when I'm tired. .</p>
			 <div id="learn_more"><a href="logout.php">Logout</a></div>
			 <div id="learn_more"><a href="transaction1.php">NewPassword</a></div>
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of middle -->
    
    <div id="tooplate_main_top"></div>
      <div id="tooplate_main">
    	<div class="col_w580 float_l">
		
		
        <ul>
<?php
         $sql1="select title , description , mov_id , cost , release_date , format , picloc
			          from favs F , movie M 
					  where F.customer_id='$login_user_id' AND F.movie_id=M.mov_id";
					  
				$result1=$mysqli->query($sql1);
		$rows=$result1->num_rows;
		
	    for ($j = 0 ; $j < $rows  ; ++$j)
		{
				$result->data_seek($j);
				$rows = $result1->fetch_array(MYSQLI_ASSOC);
				$id=$rows['mov_id'];
				$title= $rows['title'];
				$des= $rows['description'];
				$cardid=$rows['mov_id'];
				$pay=$rows['cost'];
				$vidformat=$rows['format'];
				$loc=$rows['picloc'];
				$release=$rows['release_date'];
			   echo '<li><div class="post_box">
            	<a href="prac1.php?cardid='. $id .'"><h2>'.$title .'</h2></a>
                <img src="'.$loc.'.jpg" class="image_wrapper" alt="Image 02" height="170px" width="170px" />
				<p>'.$des.'</p>
				<p><b>Cost:</b>'.$pay.'</p>
				<p><b>Release on:</b>'.$release.'</p>
				<p><b>Video Format:</b>'.$vidformat.'</p>
				<div class="cleaner"></div>
			</div></li>';
		}
?>         
			</ul>
        </div>
        
        <div class="col_w280 float_r">
        	<div class="sidebar_title">
                TRENDING..
            </div>
            <div class="sidebar_box">
                <ul class="tooplate_list">
<?php

              $sql3="select title , mov_id
			         from movie 
					 where mov_id not in 
								(select mov_id from movie M, favs F where F.customer_id='$login_user_id' and F.movie_id=M.mov_id)" ;
              $result2=$mysqli->query($sql3);
		$rows1=$result2->num_rows;
		
	    for ($j = 0 ; $j < $rows1 ; ++$j)
		{
			$result2->data_seek($j);
		$rows1 = $result2->fetch_array(MYSQLI_ASSOC);
	     $title1= $rows1['title'];
			echo	'<li><a href="prac1.php?cardid='.$rows1['mov_id'].'">'.$title1.'</a></li>';
		}
                    
?>
                </ul>
            </div>
            
            <div class="cleaner_h20"></div>
            
         
            
           
            <div class="sidebar_title">
                Quick Info.
            </div>
            <div class="sidebar_box">
                <blockquote>
                    <p>to add a video to your favorites just give it a hit.And you are good to Go.</p>
                    
                  	<cite><a href="#">John</a> - <span>Web Designer</span></cite>            </blockquote>
          </div>
        </div>    	

    	<div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="tooplate_main_bottom"></div>

</div> <!-- wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
        Copyright © 2048 <a href="#">CLUB_TRAVIS</a> 
        | Design: <a href="http://www.tooplate.com">tooplate</a>
	</div>
</div>

</body>
</html>