<?php session_start();

include('dbcon.php');
//error_reporting(0);
if(isset($_POST['submit']))
{

$otp = mt_rand(100000, 999999);	
$name   = $_POST['name'];
$mobile = $_POST['mobile'];
$email  = $_POST['email'];
$state  = $_POST['state'];
$city   = $_POST['city'];
$pincode= $_POST['pincode'];
$password= $_POST['password'];

$_SESSION['ses_email']=$email;
$_SESSION['ses_otp']=$otp;

        $ToEmail = $email;
         $EmailSubject = 'OTP From Bhagwan Darshan'; 
        //$mailheader = "Reply-To: ".$_POST["dynFrm_email"].""; 
        //$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"."CC: info@welcomemate.in"; 
        $mailheader= 'From: Registration' . "\r\n" ."Content-type: text/html; charset=iso-8859-1\r\n";

   $MESSAGE_BODY = '<html><body><head>
    <style type="text/css">
    .style1
    {
    background-color:#fff;
    }
    .style2
    {
    font-size: medium;
    font-weight: bold;
    }
    </style>
    </head>
    <div dir="ltr">
    <div class="gmail_quote"><div dir="ltr">
    <div class="gmail_quote"><div dir="ltr">
    <div class="gmail_quote"><div dir="ltr">
    <div class="gmail_quote"><div dir="ltr">
    <div class="gmail_quote"><div dir="ltr">
    <div class="gmail_quote"><div dir="ltr">
    <div class="gmail_quote"><span><font
color="#888888"></font></span><span><font color="#fff"></font></span>
    <table style="padding:20px 0px" bgcolor="#ececec" cellpadding="0"
cellspacing="0">
    <tbody>
    <tr align="center">
    <td align="center">
    <table style="font-family:Arial,Verdana,sans-serif;font-weight:bold;
background-color: #ececec70;" bgcolor="#ffffff" cellpadding="0"
cellspacing="0" >
    <tbody>
    <tr>
    <td class="style1" align="center">
    
    <a href="https://niyumart.com/temple" target="_blank">
      <!-- <img src="https://niyumart.com/temple/assets/images/logo/01.png" style="height:50px;width:70px;"></img>-->
      <h4>Bhagwan Darshan</h4>
    </a>
    </td>
    </tr>
    </tbody></table>
    <div>
    <table bgcolor="#FFFFFF" cellpadding="0" cellspacing="0"
width="100%"><tbody><tr>
    <td style="padding:15px 15px 10px ; background-color:#ececec70"
height="20" width="341"><div>
    <table>
    <tr>
    <td>
 
     <p>Dear Sir/Madam,</p>
    <p> Do Not share this OTP with anyone 
     </p>
     
     <h3><b> OTP :'.$otp.'</b></h3>
     
      <p><span style="font-size:15px;color:red;"><b>Note</b></span> :-  this email is not intended to you please ignore and delete it. Thank you for understanding</p>
      
    
    <br /><br />
    </td>
    </tr>
    </table>
    Kind Regards,<br>
    Bhagwan Darshan <br>
    </div>
    <a href="mailto:"
target="_blank"> bhagwandarshan@gmail.com</a><br/>
    <span style="color:rgb(0,0,255)" class="style2">
    <a href="https://niyumart.com/temple/" target="_blank">Go to
Website &gt;&gt;</a></span>
    </div>
    <br/><br/></td>
    </tr></tbody></table></div>
    </td>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </body></html>';
  

 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader);


$queryy="INSERT INTO apply(name,email,mobile,state,city,pincode,otp,otp_status,password,date) VALUES('$name','$email','$mobile','$state','$city','$pincode','$otp','$password','pending',now())";	 
$run=mysqli_query($con,$queryy);


    
if($run == true) {
    ?>
    <script>
        alert("Please check your Inbox or Spam mail account for the Email Verification OTP we just sent you!");
        window.location.href = "otp.php";
    </script>
    <?php 
  } else { 
    ?>
    <script>
        alert("Something went wrong");
        window.location.href = "registration.php";
    </script>
    <?php 
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
                            <li class="breadcrumb-item active" aria-current="page">Registration</li>
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
                                        <h4 class="mb-0">Registration Form</h4>
                                    </div>
                                    <div class="cal-body p-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Name *</label>
                                                <input type="text" class="form-control" name="name" required="">
                                            </div>
											  <div class="col-sm-6">
                                                <label>Phone *</label>
                                                <input type="number" class="form-control" name="mobile" required="">
                                            </div>
                                          </div>
                                        
                                      <div class="row">
                                           <div class="col-sm-6">
                                                 <label>Email address *</label>
                                         <input type="mail" class="form-control" name="email" required="">
                                            </div>
                                           <div class="col-sm-6">
                                                <label>State *</label>
                                                <input type="text" class="form-control" name="state" >
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Town / City *</label>
                                                <input type="text" class="form-control" name="city">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Postcode / ZIP *</label>
                                                <input type="text" class="form-control" name="pincode">
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Create passwaor *</label>
                                                <input type="text" class="form-control" name="password" required>
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