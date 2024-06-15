<?php
include('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.codexcoder.com/themeforest/html/peace/peace/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 05:33:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peace</title>
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
<?php $result=mysqli_query($con,"SELECT gallary_id,TIME_FORMAT(start,'%h:%i %p'),TIME_FORMAT(end,'%h:%i %p'),name,address,about,image from tbl_gallery");  ?>

    <!-- ================> PageHeader section start here <================== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__area">
                <!--<div class="pageheader__left">-->
                <!--    <h3>Gallery</h3>-->
                <!--</div>-->
                <div class="pageheader__left">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hindu Temple</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


     <!-- ================> gallery section start here <================== -->
      
     <div class="event padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__header text-center">
                <h2>Hindu Temple</h2>
                <!-- <p>Enthusiastically underwhelm quality benefits rather than professional outside the box thinking. Distinctively network highly efficient leadership skills</p> -->
            </div>
            

            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                <?php while($row=mysqli_fetch_array($result)){ ?>
                    <div class="col-sm-6 col-12">
                        <div class="event__item">
                            <div class="event__inner">
                                <div class="event__thumb">
                                    <a href="temple-details.php?id=<?php echo $row['gallary_id'];?>"><img src="temple/images/<?php echo $row['image'];?>" alt="event thumb"></a>
                                    <!-- <div class="event__thumb-date"> -->
                                        <!-- <h6>09</h6> -->
                                        <!-- <p>Nov</p> -->
                                    <!-- </div> -->
                                </div>
                                <div class="event__content">
                                    <a href="temple-details.php?id=<?php echo $row['gallary_id']?>"><h5><?php echo $row['name']?></h5></a>
                                    <div class="event__metapost">
                                        <ul class="event__metapost-info">
                                            <li><i class="far fa-clock"></i> <?php echo $row["TIME_FORMAT(start,'%h:%i %p')"] ?>  - <?php echo $row["TIME_FORMAT(end,'%h:%i %p')"];?></li>
                                            <li><i class="fas fa-map-marker-alt"></i> <?php echo $row['address'];?></li>
                                        </ul>
                                        <ul class="event__metapost-comentshare">
                                            <!-- <li class="event__metapost-coment"> -->
                                                <!-- <i class="far fa-comments"></i> -->
                                                <!-- <a href="#" class="event__metapost-count">10</a> -->
                                            <!-- </li> -->
                                         <li class="event__metapost-share"> 
                                                <i class="fas fa-share-alt"></i>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore consectetur adipisicing elit</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                            </div>
                        </div>
                    </div>
<!--                    <div class="col-lg-4 col-sm-6 col-12 cate-2">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/temple/badrinath-temple-.webp" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/temple/badrinath-temple-.webp" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/temple/Baidyanath-temple.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/temple/Baidyanath-temple.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-4 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/temple/bakeybihari.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/temple/bakeybihari.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/temple/balaji_temple.avif" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/temple/balaji_temple.avif" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-2 cate-4">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/temple/Bhimashankar-Jyotirling-Mandir.webp" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/temple/Bhimashankar-Jyotirling-Mandir.webp" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-1 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/temple/dwarika.webp" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/temple/dwarika.webp" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-2">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/temple/Grishneshwar-Jyotirlinga-Grishneshwar-Temple-e1481458103328.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/temple/Grishneshwar-Jyotirlinga-Grishneshwar-Temple-e1481458103328.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/temple/iskon.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/temple/iskon.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
           
    <!-- ================> gallery section end here <================== -->



  

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