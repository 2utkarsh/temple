<?php session_start();

include('dbcon.php');
//error_reporting(0);


// If form submitted, insert values into the database
if(isset($_POST['submit']))
{
$username=$_POST['email'];
$password=$_POST['password'];

//for security
$username=mysqli_real_escape_string($con,htmlentities(trim($username)));           //Escape special characters in a string 
$password=mysqli_real_escape_string($con,htmlentities(trim($password)));
$error="";

//Checking is user existing in the database or not
	$query="SELECT * FROM apply WHERE email='$username' && password='$password'";
	$result=mysqli_query($con,$query);
	$row=mysqli_num_rows($result);
	if($row==1)
	{
		$_SESSION['email']=$username;
    
		echo "<script>alert('Login successfully done');window.location.href='index.php';</script>";   //redirect user to home.php
    }
	else
	{  
	echo "<script>alert('Invalid Email or password! please enter valid email and password');window.location.href='login.php';</script>";   //redirect user to home.php
	}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhagwan Darshan</title>
    <link rel="shortcut icon" href="assets/css/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">

    <!-- main css for template -->
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>

    <!-- ================> preloader start here <================ -->
        <?php include('header.php');?>
    <!-- ================> header section end here <================== -->


    <!-- ================> PageHeader section start here <================== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__area">
                <!--<div class="pageheader__left">-->
                <!--    <h3>Registration</h3>-->
                <!--</div>-->
                <div class="pageheader__left">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    
    <!-- check out page section start here -->
    <div class="checkout-page padding--top padding--bottom bg-light">
        <div class="container">
            <div class="row">
                <form method="post" class="form">
                    <div class="row gutter-lg">
					 <div class="col-lg-2 mb-6">
					 </div>
                        <div class="col-lg-8 mb-6">
                            <div class="checkout-area-left">
                                <div class="bg-white mb-3">
                                    <div class="cal-title bg-title py-3 px-4">
                                        <h4 class="mb-0">Login</h4>
                                    </div>
                                
                                    <div class="cal-body p-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Email </label>
                                                <input type="email" class="form-control" name="email" required="" placeholder"Enter Email">
                                            </div>
                                          </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Password </label>
                                                <input type="text" class="form-control" name="password" required="" placeholder"Enter Password">
                                            </div>
                                          </div>
                                     
                                       <button type="submit" name="submit" class="default-btn move-right mt-4"><span>Login Now</span></button> 
                                       
                                    </div>
                                </div>
                             </div>
							  
                        </div>
						 <div class="col-lg-2 mb-6">
						 </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
    <!-- check out page section ending here -->


    <!-- ================> Footer section start here <================== -->
        <?php include('footer.php');?>
    <!-- ================> Footer section end here <================== -->

 
    <!-- vendor plugins -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <!-- <script src="assets/js/all.min.js"></script> -->
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- <script src="assets/js/donate-range.js"></script> -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>