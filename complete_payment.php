<!-- this code is from chatgpt and it is all correct. contains resend button which redirects user to bank.php page -->
<?php
include('config.php');
session_start();


if(empty($_SESSION['name']))
{
  header('location:index.php');
}
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
extract($_POST);
include_once('connection.php');
if(isset($_REQUEST['otp_verify']))
{
  $otp = $_REQUEST['otp'];
  $select_query = mysqli_query($connection,"select * from tbl_otp_check where otp='$otp' and is_expired!=1 and NOW()<=DATE_ADD(create_at,interval 5 minute)");
  $count = mysqli_num_rows($select_query);
  if($count>0)
  {
    $select_query = mysqli_query($connection, "update tbl_otp_check set is_expired=1 where otp='$otp'");
    // Transaction processing message
    echo "<body><table align='center'><tr><td><STRONG>Transaction is being processed,</STRONG></td></tr><tr><td><font color='blue'>Please Wait <i class='fa fa-spinner fa-pulse fa-fw'></i>
    <span class='sr-only'></font></td></tr><tr><td>(Do not 'RELOAD' this page or 'CLOSE' this page)</td></tr></table><h2>";
    // Redirect to profile.php after 3 seconds
    echo "<script>setTimeout(function(){ window.location='profile.php'; }, 3000);
    </script>";
    $bookid="BKID".rand(1000000,9999999);
    mysqli_query($connection,"INSERT into tbl_bookings values(NULL,'$bookid','".$_SESSION['theatre']."','".$_SESSION['user']."','".$_SESSION['show']."','".$_SESSION['screen']."','".$_SESSION['seats']."','".$_SESSION['amount']."','".$_SESSION['date']."',CURDATE(),'1')");
    $_SESSION['success']="Bookings Done!";
    // Exit script to prevent further HTML rendering
    exit;
  }
  else
  {
    $msg = "Invalid OTP!";
  }
}

if(isset($_REQUEST['resend_button'])) {
  // Redirect to bank.php when "Resend OTP" button is clicked
  header('location: bank.php');
}
?>
?>

<!DOCTYPE HTML>
<html>
<head>
<title>OTP Verify</title>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <!-- <title>OMTBS</title> -->
    <link href="css/bank.css" rel="stylesheet" type="text/css"/>
</head>
<style>
 .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
</style>


<body>
<div class="header"  style="background-color:#3D3B40;background-repeat:no-repeat;margin-top:-30px;padding-bottom:60px">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo">
			<a href="index.php"><img src="images/t-logo.png" alt="Logo Image Here"/></a>
		</div>
			  <div class="nav-wrap">
					<ul class="group" id="example-one" >
			           <li><a href="index.php" >Home</a></li>
			  		   <li><a href="theatre.php">Theatre</a></li>
			  		   <li><?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a href="profile.php"><?php echo $user['name'];?></a><a href="logout.php">Logout</a><?php }else{?><a href="login.php">Login</a> <a href="registration.php">Register</a><?php }?></li>
			        </ul>
			  </div>
 			<div class="clear"></div>
			
   		</div>
		
    </div>
     			<div class="clear"></div>
   	



    <div class="container">  
    <div class="table-responsive">  


    <div id="mainContainer" class="row large-centered">

  <div class="text-center"><h2>PAYMENT</h2></div>
  
  <hr class="divider">
  <dl class="mercDetails">
  	<dt>Merchant</dt> 				<dd>SOUTH OKKALAPA</dd>
    <dt>Transaction Amount</dt> 	<dd>MMK  <?php echo  $_SESSION['amount'];?></dd>
    <!-- <dt>Debit Card</dt> 		<dd>4511111111</dd> -->
  </dl>
  <hr class="divider">
  
  
<form name="form1" id="form1" method="post" action="complete_payment.php">
<fieldset class="page2">
<div class="page-heading">
<h6 class="form-heading">Authenticate Payment</h6>
<p class="form-subheading">OTP is sent to your <strong>Email</strong></p>


</div>

<form id="otpForm" method="post" action="">
       <div class="form-group">
       <label for="otp">Enter One Time Password (OTP)</label>
       <input type="text" name="otp" id="otp" placeholder="One Time Password" <?php if (!isset($_REQUEST['resend_button'])) echo "required"; ?>
       data-parsley-type="otp" data-parsley-trigger="keyup" class="form-control"/>
      </div>
      <div class="form-group">
       <input type="submit" id="submit" name="otp_verify" value="Submit" class="btn btn-success" />
       <!-- </div>
       <div class="form-group"> -->
       <input type="hidden" name="resend" value="1"> <!-- Hidden field indicating resend -->
       <input type="submit" id="resend" name="resend_button" value="Resend OTP" class="btn btn-primary" onclick="makeOptional()" />
       </div>
       <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
     </form>
     </div>
   </div>  
  </div>



  <div
         class="text-center"
         style="background-color:#3D3B40;color:aliceblue;margin-bottom:50px;margin-top:50px"
         >
      © 2024 Copyright:
      <a class="text-white" href="#"
         >CityCinema</a
        >
    </div>




 </body>  

</html>
<script>
function makeOptional() {
    document.getElementById('otp').removeAttribute('required');
}
</script>
