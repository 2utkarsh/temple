<?php session_start();

include('dbcon.php');
//error_reporting(0);


$query=mysqli_query($con,"SELECT * FROM apply where otp='".$_SESSION['ses_otp']."' && otp_status='pending' order by apply_id");
      $row=mysqli_fetch_array($query);
   $getotp = $row['otp'];
$apply_id = $row['apply_id'];


   if(isset($_POST['submit']))
   {
   $otp = $_POST['otp'];

if($otp==$getotp){
  $result=mysqli_query($con,"UPDATE apply SET otp_status='verified' where apply_id='$apply_id'");
  echo"<script>alert('Email verification successfully done');window.href='otp.php';</script>";
}
else{
      echo"<script>alert('Please enter valid otp');window.href='otp.php';</script>";   
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
                            <li class="breadcrumb-item active" aria-current="page">OTP Verify</li>
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
                                        <h4 class="mb-0">OTP Verify</h4>
                                    </div>
                                    <p style="color:red;">Please enter the 6 digit code that has been sent to your register email address at <?php echo $_SESSION['ses_email'];?>! </p>
                                    <div class="cal-body p-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>OTP </label>
                                                <input type="number" class="form-control" name="otp" required="" placeholder"Enter OTP">
                                            </div>
                                          </div>
                                        
                                     
                                       <button type="submit" name="submit" class="default-btn move-right mt-4"><span>Submit</span></button> 
                                       
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