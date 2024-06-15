<?php
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.codexcoder.com/themeforest/html/peace/peace/event-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 05:33:20 GMT -->
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
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
       
    </style>
</head>

<body>

    <!-- ================> preloader start here <================ -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- ================> preloader ending here <================ -->

    <!-- ================> Header Search <================ -->
    <!-- <div class="header-form">
        <div class="bg-lay">
            <div class="cross">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <form class="form-container">
            <input type="text" placeholder="Input Your Search" name="name">
            <button type="submit">Search</button>
        </form>
    </div> -->
    <!-- ================> Header Search <================ -->

    <!-- ================> Header Cart <================ -->
    <!-- <div class="overlay"></div>
    <div class="cart-sidebar-area">
        <div class="top-content">
            <img src="temple " alt="logo">
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/cart/01.jpg" alt="blackfriday">
                    </div>
                    <div class="content">
                        <h4 class="title">Color Pencil</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/cart/02.jpg" alt="blackfriday">
                    </div>
                    <div class="content">
                        <h4 class="title">Water Pot</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/cart/03.jpg" alt="blackfriday">
                    </div>
                    <div class="content">
                        <h4 class="title">Art Paper</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/cart/04.jpg" alt="blackfriday">
                    </div>
                    <div class="content">
                        <h4 class="title">Stop Watch</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/cart/05.jpg" alt="blackfriday">
                    </div>
                    <div class="content">
                        <h4 class="title">Comics Book</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="check-out.html" class="default-btn move-right"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ================> Header Cart <================ -->



    <!-- ================> header section start here <================== -->
    <!-- <header class="header">
        <div class="navbar-expand-xl">
            <div class="collapse navbar-collapse" id="menubar2">
                <div class="header__top w-100">
                    <div class="container">
                        <div class="header__top-area">
                            <div class="header__top-left">
                                <ul>
                                    <li>
                                        <i class="fas fa-phone-alt"></i>
                                        +8812 345 678 912
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        info@yourmail.com
                                    </li>
                                </ul>
                            </div>
                            <div class="header__top-center">
                                <div class="header__top-logo d-none d-md-block">
                                    <a href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="header__top-right">
                                <div class="header__top-socialsearch">
                                    <div class="header__top-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="header__top-search">
                                        <ul>
                                            <li class="search__icon"><i class="fas fa-search"></i></li>
                                            <li class="cart__icon"><i class="fas fa-shopping-bag"></i><span>04</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header__bottom">
            <div class="container">
                <div class="header__mainmenu navbar navbar-expand-xl navbar-light">
                    <div class="header__logo">
                        <a href="index.html" class="d-none d-xl-block"><img src="assets/images/logo/02.png" alt="logo"></a>
                        <a href="index.html" class="d-xl-none"><img src="assets/images/logo/01.png" alt="logo"></a>
                    </div>
                    <div class="header__bar">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menubar" aria-controls="menubar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <button class="navbar-toggler header__bar-info" type="button" data-bs-toggle="collapse" data-bs-target="#menubar2" aria-controls="menubar2" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-info"></span>
                        </button>
                    </div>
                    <div class="header__menu navbar-expand-xl">
                        <div class="collapse navbar-collapse" id="menubar">
                            <ul>
                                <li>
                                    <a href="#0">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Page Christian</a></li>
                                        <li><a href="index-2.html">Home Page Muslim</a></li>
                                        <li><a href="index-3.html">Home Page Hindu</a></li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="#0">Events</a>
                                    <ul>
                                        <li><a href="event.html">Event Two Column</a></li>
                                        <li><a href="event-2.html">Event Three Column</a></li>
                                        <li><a href="event-single.html" class="active">Event Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Causes</a>
                                    <ul>
                                        <li><a href="cause.html">Cause Two Column</a></li>
                                        <li><a href="cause-single.html">Cause Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Gallery</a>
                                    <ul>
                                        <li><a href="gallery.html">Gallery Default</a></li>
                                        <li><a href="gallery-2.html">Gallery 4 Columns</a></li>
                                        <li><a href="gallery-3.html">Gallery 6 Columns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Sermons</a>
                                    <ul>
                                        <li><a href="sermon.html">Sermons 2 Columns</a></li>
                                        <li><a href="sermon-single.html">Sermons Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-2.html">Blog 2 Columns</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="check-out.html">Check Out Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                            <a href="cause-single.html" class="default-btn"><span>Donate Now <i class="fas fa-heart"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->
    <?php include('header.php');
    $id=$_GET['id'];
    $result=mysqli_query($con,"SELECT TIME_FORMAT(start,'%h:%i %p'),TIME_FORMAT(end,'%h:%i %p'),name,address,about,image from tbl_gallery where gallary_id='$id'");
     
    ?>
    <!-- ================> header section end here <================== -->


    <!-- ================> PageHeader section start here <================== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__area">
                <div class="pageheader__left">
                    <h3>Temple Details</h3>
                </div>
                <div class="pageheader__right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Temple Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    <!-- ================> Event section start here <================== -->
    <?php $row=mysqli_fetch_array($result);
    $result1=mysqli_query($con,"SELECT * from tbl_photo where name='".$row['name']."'"); 
    
    ?>
    <div class="event event-single padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="event__item">
                            <div class="event__inner">
                                <div class="event__content pt-0">
                                    <h3><?php echo $row['name'];?> </h3>
                                    <div class="event__metapost">
                                        <ul class="event__metapost-info">
                                            <li><i class="far fa-clock"></i> <?php echo $row["TIME_FORMAT(start,'%h:%i %p')"];?> - <?php echo $row["TIME_FORMAT(end,'%h:%i %p')"]; ?></li>
                                            <li><i class="fas fa-map-marker-alt"></i> <?php echo $row['address'];?></li>
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
                                    <div class="event__thumb mb-3">
                                        <img src="temple/images/<?php echo $row['image'];?>" alt="event thumb">
                                        <!-- <div class="event__thumb-date"> -->
                                            <!-- <h6>09</h6> -->
                                            <!-- <p>Nov</p> -->
                                        <!-- </div> -->
                                    </div>
                                        </div><p style="text-align:justify"><?php echo $row['about'] ?></p> 
                            </div>
                           
                        </div>
                       
                    </div>
                    
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">
                            <div class="sidebar__location mb-4">
                                <div class="section__header">
                                <h2>Address Details</h2>
                                 
   <div id="map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__info">
                                <div class="section__header">
                                    <h2>Temple details</h2>
                                </div>
                                <div class="section__wrapper">
                                    <ul class="sidebar__info-list mb-3">
                                        <li>
                                            <div class="sidebar__info-left"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="sidebar__info-right"><?php echo $row['address']; ?></div>
                                        </li>
                                        <!-- <li> -->
                                          <!-- ̥  <div class="sidebar__info-left"><i class="far fa-calendar-alt"></i></div> -->
                                            <!-- <div class="sidebar__info-right">09 November, 2022</div> -->
                                        <!-- </li> -->
                                        <li>
                                            <div class="sidebar__info-left"><i class="far fa-clock"></i></div>
                                            <div class="sidebar__info-right"><?php echo $row["TIME_FORMAT(start,'%h:%i %p')"];?> - <?php echo $row["TIME_FORMAT(end,'%h:%i %p')"]; ?></div>
                                        </li>
                                        <!-- <li> -->
                                            <!-- <div class="sidebar__info-left"><i class="fas fa-envelope"></i></div> -->
                                            <!-- <div class="sidebar__info-right">info@yourmail.com</div> -->
                                        <!-- </li> -->
                                    </ul>
                                    <a href="#" class="default-btn move-right"><span>Join Now</span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="gallery padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__header text-center">
                <h2>Gallery</h2>
                 </div>
            <div class="section__wrapper">
               
            <div class="row g-3 grid">
                <?php while($row1=mysqli_fetch_array($result1)){?>
                    <div class="col-lg-4 col-sm-6 col-12 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="temple/images/<?php echo $row1['image'] ?>" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="temple/images/<?php echo $row1['image'] ?>" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <!-- <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-2">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/02.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/02.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/03.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/03.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-4 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/04.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/04.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/05.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/05.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-2 cate-4">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/06.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/06.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-1 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/07.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/07.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-2">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/08.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/08.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/09.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/09.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-4">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/10.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/10.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-2">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/11.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/11.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-3/12.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-3/12.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Event section end here <================== -->



    <!-- ================> Social section start here <================== -->
    <div class="social">
        <div class="container">
            <div class="social__area">
                <ul class="social__list">
                    <li class="social__list-facebook">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                            <span>facebook</span>
                        </a>
                    </li>
                    <li class="social__list-twitter">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                            <span>twitter</span>
                        </a>
                    </li>
                    <li class="social__list-linkedin">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                            <span>linkedin</span>
                        </a>
                    </li>
                    <li class="social__list-instagram">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <span>instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ================> Social section end here <================== -->



    <!-- ================> Footer section start here <================== -->
     <?php include('footer.php'); ?>
    <!-- <footer class="footer"> -->
        <!-- <div class="footer__top padding--top padding--bottom"> -->
            <!-- <div class="container"> -->
                <!-- <div class="row g-4"> -->
                    <!-- <div class="col-xl-3 col-sm-6 col-12"> -->
                        <!-- <div class="footer__about"> -->
                            <!-- <div class="section__header"> -->
                                <!-- <h2>About Peace</h2> -->
                            <!-- </div> -->
                            <!-- <div class="section__wrapper"> -->
                                <!-- <div class="footer__about-thumb"> -->
                                    <!-- <img src="assets/images/footer/about/01.jpg" alt="footer thumb" class="w-100">
                                </div>
                                <div class="footer__about-contet">
                                    <p>Dramatically strategize economically sound action items for e-business niches. Quickly re-engineer 24/365 potentialities before.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__tags">
                            <div class="section__header">
                                <h2>Post Tag</h2>
                            </div>
                            <div class="section__wrapper">
                                <ul>
                                    <li><a href="#">Christian</a></li>
                                    <li><a href="#">Hindu</a></li>
                                    <li><a href="#">Magazine</a></li>
                                    <li><a href="#">Muslims</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">SEO</a></li>
                                    <li><a href="#">Themes</a></li>
                                    <li><a href="#">WordPress</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Photography</a></li>
                                    <li><a href="#">Media</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__post">
                            <div class="section__header">
                                <h2>Recent Post</h2>
                            </div>
                            <div class="section__wrapper">
                                <div class="footer__post-item">
                                    <div class="footer__post-inner">
                                        <div class="footer__post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/footer/post/01.jpg" alt="footer post"></a>
                                        </div>
                                        <div class="footer__post-content">
                                            <a href="blog-single.html"><h6>Collaboratively Coordinate.</h6></a>
                                            <p><i class="far fa-calendar-alt"></i> 10 January, 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer__post-item">
                                    <div class="footer__post-inner">
                                        <div class="footer__post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/footer/post/02.jpg" alt="footer post"></a>
                                        </div>
                                        <div class="footer__post-content">
                                            <a href="blog-single.html"><h6>Quickly Develop Exceptional</h6></a>
                                            <p><i class="far fa-calendar-alt"></i> 10 January, 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer__post-item">
                                    <div class="footer__post-inner">
                                        <div class="footer__post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/footer/post/03.jpg" alt="footer post"></a>
                                        </div>
                                        <div class="footer__post-content">
                                            <a href="blog-single.html"><h6>Why you need Peace WordPress Theme?</h6></a>
                                            <p><i class="far fa-calendar-alt"></i> 10 January, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__links">
                            <div class="section__header">
                                <h2>Useful Links</h2>
                            </div>
                            <div class="section__wrapper">
                                <ul>
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Entries <abbr title="RSS">RSS</abbr></a></li>
                                    <li><a href="#">Comments <abbr title="RSS">RSS</abbr></a></li>
                                    <li><a href="#">WordPress.org</a></li>
                                    <li><a href="#">Google</a></li>
                                    <li><a href="#">Template</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom-area text-center">
                    <div class="footer__bottom-logo">
                        <a href="index.html"><img src="assets/images/logo/01.png" alt="footer logo"></a>
                    </div>
                    <div class="footer__bottom-content">
                        <p>Copyright &copy; 2022 <a href="index.html">Peace</a> | Designed by <a href="https://themeforest.net/user/codexcoder/portfolio">CodexCoder</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- ================> Footer section end here <================== -->

    

    

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->



    

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
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        let map;
let marker;

function initMap() {
    map = L.map('map').setView([0.0,0.0], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
}


    const address ="<?php echo $row['address'] ?>";
    geocodeAddress(address);


function geocodeAddress(address) {
    const url = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                const lat = data[0].lat;
                const lon = data[0].lon;
                const latLng = new L.LatLng(lat, lon);
                map.setView(latLng, 13);

                if (marker) {
                    marker.setLatLng(latLng);
                } else {
                    marker = L.marker(latLng).addTo(map);
                }

                
            } else {
                alert("Address not found!");
            }
        })
        .catch(error => {
            console.error('Error fetching geocode:', error);
        });
}

// Initialize the map
window.onload = initMap;

    </script>
</body>

<!-- Mirrored from demos.codexcoder.com/themeforest/html/peace/peace/event-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 05:33:20 GMT -->
</html>