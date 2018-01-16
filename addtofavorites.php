<?php
if(isset($_GET['cardid'])){
$ids = $_GET['cardid'];
}
session_start();
$custid = $_SESSION['login_user'];
if($custid===NULL)
{
	header('location:login2.php');
}
if(isset($_POST['favorites']))
{
           if(!empty($movid)){
			
			$mysqli  = Connect();
			if ($mysqli->connect_errno) {
				echo "<p>Connect failed:</p>", $mysqli->connect_error;
				exit();
			}
			
			else
			{
			  
				
				$sql1="INSERT INTO `favs` (`customer_id`,`mov_id` ) VALUES ('$custid','ids')";
			      $result = $mysqli->query($sql1);
				  header('location:welcome.php');
			}
		   }
			
			else{header('location:startpage.php');}
		}
        
?>