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
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Spectre sign up form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
 <link rel="stylesheet" href="css/newcss1.css">
</head>

<body>

<?php
   include ('login.php');
   $mysqli=Connect();
   $error='';
   $remain='';
   if(isset($_POST['Buy']))
    {
		$numberofdays=$_POST['rent'];
		$pay=$_POST['pay'];
		$vendor=$_POST['vendorid'];
		
		$sql="select membership_type from customer where cust_id='$custid'";
		$res=$mysqli->query($sql);
		$row = $res->fetch_array(MYSQLI_ASSOC);
		$memtype=$row['membership_type'];
		
		$sql1="select cost  from movie where mov_id='$ids'";
		$res1=$mysqli->query($sql1);
		$row1 = $res1->fetch_array(MYSQLI_ASSOC);
		$cost=$row1['cost'];
		
		
	    $sql2="select discount , rate from vendor where vendor_id='$vendor'";
		$res2=$mysqli->query($sql2);
		$row2 = $res2->fetch_array(MYSQLI_ASSOC);
		$discount=$row2['discount'];
		$rate=$row2['rate'];
		
		
		
		if($pay===$cost)
		{
		if($memtype === 'PRIME')
		{
		 $actualcost=$cost*((100-$discount)/100);
		 $actualcost=$actualcost*$numberofdays;
		 $remain=$cost-$actualcost;
		 $sql ="INSERT INTO `transaction` ( `customer_id`, `video_id`, `days` , `cost`) VALUES ( '$custid', '$ids', '$numberofdays', '$actualcost')";
		$result = $mysqli->query($sql);
	     Header('Location:welcome.php');
		}
		else
		{
		$cost=$cost*$numberofdays;
		$sql ="INSERT INTO `transaction` ( `customer_id`, `video_id`,  `days` , `cost`) VALUES ( '$custid', '$ids', '$numberofdays' , '$cost')";
		$result = $mysqli->query($sql);
		Header('Location:welcome.php');
		}
		}
		else
		{
			$error='Offline access only after payment';
			Header('Location:startpage.php');
			
		}
	 }


	  
?>

  <div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
     <h1 class="logo__text">CLUB_TRAVIS</h1>
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">TRANSACTION PAGE</h1>
      <h2 class="heading--secondary">Please cooperate..</h2>
	  </div>
  <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
  <?php echo '<form action="transaction.php?cardid='.$ids.'" method="post">';?>
   
   
      <div class="form-group">
        <label for="password">Number Of Days</label>
        <input class="form-control" type="number" name="rent" id="rent" placeholder="rent Date" required />
      </div>
	  
	   
	  
	  <div class="form-group">
      <label for="password">Vendor</label>
       <select class="form-control" name="vendorid" >
		<?php
		      $sql1="select  vendor_id , name , discount from available , vendor where video_id='$ids' and vendorid=vendor_id";
				$result=$mysqli->query($sql1);
				 if($result!=null)
					{
						$rows=$result->num_rows;
					   for ($j = 0 ; $j < $rows ; ++$j)
						{
						$result->data_seek($j);
						$row = $result->fetch_array(MYSQLI_ASSOC);
						
						echo '<option> '.$row['name'].' - '.$row['discount'].'%</option>';
				
					    }
					}
			?>
          </select>
       </div>
	  
	   <div class="form-group">
        <label for="password">PAYMENT</label>
        <input class="form-control" type="text" name="pay" id="pay" placeholder="PAYMENT" required />
      </div>
	 <span><?php echo $error; ?></span>
	    <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Buy" name="Buy"/>
          </li>
         </ul>
      </div>
	  
	
     
    </form>  
  </div>
</div>
  
  
</body>
</html>