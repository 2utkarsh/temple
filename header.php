<?php 
include('dbcon.php');
if(isset($_SESSION['email'])){
$query=mysqli_query($con,"SELECT * FROM apply where email='".$_SESSION['email']."' ");
      $row=mysqli_fetch_array($query);
}
?>

    <!-- ================> preloader start here <================ -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ================> preloader ending here <================ -->

    <!-- ================> Header Search <================ -->
    <div class="header-form">
        <div class="bg-lay">
            <div class="cross">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <form class="form-container">
            <input type="text" placeholder="Input Your Search" name="name">
            <button type="submit">Search</button>
        </form>
    </div>
    <!-- ================> Header Search <================ -->

    <!-- ================> Header Cart <================ -->
    <div class="overlay" ></div>
    <div class="cart-sidebar-area">
        <div class="top-content">
            <img src="assets/images/logo/02.png" alt="logo">
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
    </div>
    <!-- ================> Header Cart <================ -->



    <!-- ================> header section start here <================== -->
    <header class="header">
        <div class="navbar-expand-xl">
            <div class="collapse navbar-collapse" id="menubar2">
                <div class="header__top w-100">
                    <div class="container">
                        <div class="header__top-area">
                            <div class="header__top-left">
                                <ul>
                                    <li>
                                        <i class="fas fa-phone-alt"></i>
                                       <a href="tel:7905115429">+91-7905115429</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                         <a href="mailto:bhagwandarshan.live@gmail.com"> bhagwandarshan.live@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__top-center">
                                <div class="header__top-logo d-none d-md-block">
                                    <a href="index.html"><img src="assets/images/logo/01.png" alt="logo" style="height:120px"></a>
                                </div>
                            </div>
                            <div class="header__top-right">
                                <div class="header__top-socialsearch">
                                    <!--<div class="header__top-social">-->
                                    <!--    <ul>-->
                                    <!--        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                                    <!--        <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                                    <!--        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                                    <!--        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                    <div class="header__top-search">
                                        <form class="form-container">
            <input type="text" placeholder="Input Your Search" name="name">
            <button type="submit" class="search-btnn">Search</button>
        </form>
                                        <!--<ul>-->
                                        <!--    <li class="search__icon"><i class="fas fa-search"></i></li>-->
                                            <!--<li class="cart__icon"><i class="fas fa-shopping-bag"></i><span>04</span></li>-->
                                        <!--</ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header__bottom" style="z-index:+200000">
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
                                <li class="active"> <a href="index.php">Home</a> </li>
                                <li> <a href="about.php">About Bhagwan Darsan</a></li>
                                <li> <a href="temple.php">Hindu Temple</a> </li>
                                <li> <a href="blog.php">Blog</a> </li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                            <?php if(empty($_SESSION['email'])){?>
                            <a href="registration.php" class="default-btn"><span>Registration <i class="fas fa-heart"></i></span></a>
                            <?php } else{ ?>
                                 <a href="logout.php" class="default-btn"><span><?php echo $row['name'];?><i class="fas fa-heart"></i></span></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ================> header section end here <================== -->


 