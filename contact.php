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
                <!--    <h3>Contact</h3>-->
                <!--</div>-->
                <div class="pageheader__left">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    
    <!-- ================> Contact section start here <================== -->
    <div class="contact padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__header text-center">
                <h2>Contact Us</h2>
            </div>
            <div class="section__wrapper">
                <div class="contact__form">
                    <form class="d-flex flex-wrap justify-content-between" action="https://demos.codexcoder.com/themeforest/html/peace/peace/contact.php" id="contact-form" method="POST">
                        <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                        <input type="text" placeholder="Your Email" id="email" name="email" required>
                        <input class="w-100" type="text" placeholder="Subject" id="subject" name="subject" required>
                        <textarea placeholder="Your Message" rows="8" name="message" id="message" required></textarea>
                        <div class="text-center w-100">
                            <button type="submit" class="default-btn move-right"><span>SEND NOW</span></button>
                        </div>
                    </form>
                    <p class="form-message"></p> 
                </div> 
            </div>
        </div>
    </div>
    <!-- ================> Contact section end here <================== -->


    <!-- ================> Location section start here <================== -->
   <!-- <div class="location">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-6 col-12">
                    <div class="location__left">
                        <div class="location__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355669374!2d-118.69192993092697!3d34.02073049448939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1633958856057!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="location__right padding--top padding--bottom">
                        <div class="location__info">
                            <div class="location__info-top">
                                <div class="section__header">
                                    <h2>Contact Person</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="location__info-thumb">
                                        <img src="assets/images/location/01.jpg" alt="location thumb">
                                    </div>
                                    <div class="location__info-content">
                                        <h6>Deniyel Murchi</h6>
                                        <span>Church Pastor</span>
                                        <ul>
                                            <li><b>Tel:</b>+002145698</li>
                                            <li><b>Email:</b>info@yourmail.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="location__info-bottom">
                                <div class="section__header">
                                    <h2>Contact Info</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="location__info-list">
                                        <ul>
                                            <li>
                                                <div class="location__info-left">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div> 
                                                <div class="location__info-right">
                                                    <p>Inner Circular Road, New Fabada Streed Barmuda, USA.</p>
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="location__info-left">
                                                    <i class="far fa-clock"></i>
                                                </div> 
                                                <div class="location__info-right">
                                                    <ul>
                                                        <li><b>Monday-Thursday :</b> 06:00 am - 09:00 pm</li>
                                                        <li><b>Friday :</b> 10:30 am - 05:30 pm</li>
                                                        <li><b>Saturday :</b> 10:30 am - 05:30 pm</li>
                                                        <li><b>Sunday :</b> Closed</li>
                                                    </ul>
                                                </div> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- ================> Location section end here <================== -->




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

<!-- Mirrored from demos.codexcoder.com/themeforest/html/peace/peace/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 05:33:48 GMT -->
</html>