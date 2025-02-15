<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);


if(isset($btn))
{
$mq=mysqli_query($connect,"select max(id) from tt_bidder");
$mr=mysqli_fetch_array($mq);
$id=$mr['max(id)']+1;

$uname="S".$id;
$proof="P".$id.$_FILES['file']['name'];
$qry=mysqli_query($connect,"insert into tt_bidder(id,name,mobile,email,address,proof,uname,pass) values($id,'$name','$mobile','$email','$address','$proof','$uname','$pass')");
	if($qry)
	{
	move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$proof);
	?>
	<script language="javascript">
	alert("Registered Successfully & wait for verification");
	window.location.href="login.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script language="javascript">
	alert("Already Exist!");
	</script>
	<?php
	}
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php include("title.php"); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script language="javascript">
function validate()
{
	if(document.form1.mobile.value=="")
	{
	return false;
	}
	if(document.form1.mobile.value.length!=10)
	{
	return false;
	}
	if(isNaN(document.form1.mobile.value))
	{
	return false;
	}
	
return true;
}
</script>
<script>
function check()
{

    var mobile = document.getElementById('mobile');
   
    
    var message = document.getElementById('message');

   var goodColor = "#0C6";
    var badColor = "#FF9B37";
  
    if(mobile.value.length!=10){
       
        mobile.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "required 10 digits, match requested format!"
    }
	else
	{
	 message.style.color = goodColor;
	}
	}
</script>

</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header_area">
            <div class="main-header">
             <div class="header-bottom header-sticky">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="header-left  d-flex f-right align-items-center">
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav> 
                            <ul id="navigation">                                                                                                                                     
                                <li><a href="index.php">Home</a></li>
                                <li><a href="login_user.php">Seller</a></li>
                                <li><a href="login.php">Bidder</a></li>
                                <!--<li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </li>-->
                                
                            </ul>
                        </nav>
                    </div>
                    <!-- left Btn -->
                    <div class="header-right-btn f-right d-none d-lg-block  ml-30">
                        <a href="login_admin.php" class="header-btn">Admin</a>
                    </div>
                </div>          
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider position-relative hero-overly slider-height2  d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                <div class="container">
                 <div class="row">
                     <div class="col-xl-6 col-lg-6">
                        <div class="hero-caption hero-caption2">
                            <img src="assets/img/hero/hero-icon.png" alt="" data-animation="zoomIn" data-delay="1s">
                            <h2 data-animation="fadeInLeft" data-delay=".4s">contact</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left img -->
            <div class="hero-img hero-img2">
                <img src="assets/img/hero/h2_hero2.png" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!--?  Contact Area start  -->
<section class="contact-section">
    <div class="container">
        
        
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Bidder - Registration</h2>
            </div>
            <div class="col-lg-8">
                <form name="form1" class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                               <input name="mobile" id="mobile" class="form-control" type="text" maxlength="10" onKeyUp="check()" placeholder="Mobile No." autofocus="" required><span id="message"></span>
                            </div>
                        </div>
						<div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Email">
                            </div>
                        </div>
						<div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="address" type="text" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
							Proof Image
                                <input class="form-control" name="file" type="file" placeholder="Proof Image">
                            </div>
                        </div>
				
						
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" name="btn" class="button button-contactForm boxed-btn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Custom OurFit</h3>
                        <p>TamilNadu, India</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+1 253 565 2365</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>support@tailor.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->
</main>
<footer>
    <div class="footer-wrapper section-bg2 pl-100"  data-background="assets/img/gallery/footer-bg.png">
        <!-- Footer Start-->
        
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                 <?php include("title.php"); ?><a href="https://colorlib.com" target="_blank"></a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
          <!-- Map -->
        
    </div>
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>