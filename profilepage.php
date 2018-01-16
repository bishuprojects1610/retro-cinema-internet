<?php
include('session.php');
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
                <a rel="nofollow" href="http://www.adobe.com/go/getflashplayer">
                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                </a>
			</div>	
        </div>
        <div id="mid_left">
            <div id="mid_title">
                HI.....<?php  echo $login_sessionuser;  ?>
            </div>
            <p>Love myself I do. Not everything, but I love the good as well as the bad. 
			I love my crazy lifestyle, and I love my hard discipline. 
			I love my freedom of speech and the way my eyes get dark when I'm tired. .</p>
            </div>
        <div class="cleaner"></div>
	</div> <!-- end of middle -->
    
    <div id="tooplate_main_top"></div>
    <div id="tooplate_main">
    	
       <div class="col_w580 float_l">
        	<div class="post_box">
            	<h2><?php echo $login_sessionemail; ?></h2>
                <img src="images/tooplate_image_02.png" class="image_wrapper" alt="Image 02" />
				
                <p>provides free HTML CSS templates for your websites. Vestibulum adipiscing tempus elit eu condimentum. Fusce at mi felis. Etiam sed velit nibh. Nunc bibendum justo nec eros elementum auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                
                <div class="cleaner"></div>
			</div>
            <div class="post_box">
            	<h2>Curabitur hendrerit malesuada</h2>
            	<img src="images/tooplate_image_03.png" class="image_wrapper" alt="Image 03" />
				
                <p>Integer et condimentum nisi. Aenean enim nisi, aliquam non tincidunt vel, tristique sit amet libero. Morbi quis tortor tortor, eget venenatis ante. Donec iaculis tellus semper massa adipiscing tristique. Vestibulum ut lorem quam.</p>
               
                <div class="cleaner"></div>
			</div>
            <div class="post_box">
                <h2>Etiam Auctor Sapien Dapibus </h2>
                <img src="images/tooplate_image_04.png" class="image_wrapper" alt="Image 04" />
               
                <p>Morbi quis diam nisl, ac sagittis massa. Aliquam erat volutpat. Donec quam felis, lacinia non gravida vel, sagittis et libero. Maecenas vestibulum commodo lorem sed volutpat. Nunc et leo a nisl placerat consequat. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                
                <div class="cleaner"></div>
			</div>
        </div>
        
        <div class="col_w280 float_r">
        	<div class="sidebar_title">
                Categories
            </div>
            <div class="sidebar_box">
                <ul class="tooplate_list">
                    <li><a href="#">Aliquam pretium porta</a></li>
                    <li><a href="#">Fusce quis diam sit amet</a></li>
                    <li><a href="#">Praesent lobortis fringilla</a></li>
                    <li><a href="#">Quisque dictum pharetra</a></li>
                </ul>
            </div>
            
            <div class="cleaner_h20"></div>
            
            <div class="sidebar_title">
                Cool Links
            </div>
            <div class="sidebar_box">
                <ul class="tooplate_list">
                    <li><a href="#">Free CSS Templates</a></li>
                    <li><a href="#">Web Design Blog</a></li>
                    <li><a href="#">Flash Templates</a></li>
                    <li><a href="#">Website Templates</a></li>
                </ul>
            </div>
            
            <div class="cleaner_h20"></div>
            
            <div class="sidebar_title">
                Quick Info.
            </div>
            <div class="sidebar_box">
                <blockquote>
                    <p> In velit urna, convallis id, pharetra in, iaculis sit amet, mi. Duis id lorem sit amet quam gravida consequat.</p>
                    
                  	<cite><a href="#">John</a> - <span>Web Designer</span></cite>            </blockquote>
          </div>
        </div>    	

    	<div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="tooplate_main_bottom"></div>

</div> <!-- wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
        Copyright © 2048 <a href="#">Company Name</a> 
        | Design: <a href="http://www.tooplate.com">tooplate</a>
	</div>
</div>

</body>
</html>