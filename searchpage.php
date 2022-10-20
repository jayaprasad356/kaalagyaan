<?php
include_once('admin/includes/functions.php');
$function = new functions;
include_once('admin/includes/custom-functions.php');
$fn = new custom_functions;
include_once('admin/includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");
session_start();
$city_id = $_SESSION['city_id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Templatemanja" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="KAALGYAAN is a very clean and modern Magazine / Blog Html Template. It's perfect for fast blogging, livestreams and classic blogs">
<meta name="keywords" content="	blog, clean, newspaper, personal blog, magazine, sport, Office, minimal, personal, elegant, Temples, post, blogger, blog template.">

<!-- SITE TITLE -->
<title>KAALGYAAN</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/animate.css">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Prata&amp;display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/linearicons.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="assets/css/all.min.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

<!-- LOADER -->
<div id="preloader">
    <div class="sk-folding-cube">
		<div class="sk-folding-cube-box">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
	</div>
</div>
<!-- END LOADER --> 

<!-- START POPUP -->
<div class="modal fade lr_popup" id="Login" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered" role="document">
    	<div class="modal-content border-0">
    		<div class="modal-body">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">
                	<div class="col-12">
                    	<div class="padding_eight_all">	
                            <div class="heading_s1">
                                <h4>Login</h4>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                            <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block" name="login">Log in</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook rounded-0"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google rounded-0"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Don't Have an Account? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#SignUp">Sign up now</a></div>
                        </div>
                	</div>
                </div>
        	</div>
        </div>
    </div>
</div>

<div class="modal fade lr_popup" id="SignUp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered" role="document">
    	<div class="modal-content border-0">
    		<div class="modal-body">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">
                	<div class="col-12">
                    	<div class="padding_eight_all">	
                            <div class="heading_s1">
                                <h4>Sign Up</h4>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Confirm Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                            <label class="form-check-label" for="exampleCheckbox3"><span>I agree to terms &amp; Policy.</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block" name="register">Register</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook rounded-0"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google rounded-0"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Already have an account? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#Login">Login Here!</a></div>
                        </div>
                	</div>
                </div>
        	</div>
        </div>
    </div>
</div>
<!-- END POPUP --> 

<!-- START HEADER -->
<header class="header_wrap dark_skin fixed-top">
	<div class="top-header bg_dark light_skin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <ul class="header_list text-center text-md-left">
                    	<li><i class="far fa-clock"></i> <span id="current_time"></span></li>
                        <!-- <li><a href="#" data-toggle="modal" data-target="#SignUp">Sign Up</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#Login">Login</a></li> -->
                    </ul>
                </div>
                <div class="col-md-5">
                	<div class="d-flex align-items-center justify-content-center justify-content-md-end">
                    
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="container">
    	<nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="index.php">
                <h2 class="mb-0">KAALGYAAN</h2>
                <!-- <img class="logo_light" src="assets/images/logo_white.png" alt="logo" />
                <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo" /> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li>
                        <a  class="nav-link  active" href="index.php">Home</a>
                    </li>
                    <li>
                        <a  class="nav-link " href="#">About</a>
                    </li>  <li>
                        <a  class="nav-link " href="#">Gallery</a>
                    </li>
                 <li><a class="nav-link nav_item" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                    <div class="search_wrap">
                        <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                        <form>
                            <input type="text" placeholder="Search" class="form-control" id="search_input">
                            <a href="searchpage.php" type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></a>
                        </form>
                    </div>
                </li>
            </ul>
		</nav>
	</div>
</header>
<!-- START HEADER --> 

<section class="search">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner">
        <?php
            $sql = "SELECT * FROM `searchpage_banners` WHERE city_id='$city_id'";
            $db->sql($sql);
            $result = $db->getResult();
            $num = $db->numRows($result);
            for ($x = 0; $x < $num; $x++) {
        ?>
          <div class="carousel-item <?php echo $x == 0 ? "active" : '' ?>">
            <div class="banner-overlay"></div>
            <img src="<?php echo 'admin/'.$result[$x]['image'];?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $result[$x]['title'];?></h5>
              <p><?php echo $result[$x]['description'];?> </p>
            </div>
          </div>
          <?php }?>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
</section>

<div class="section pt-0 pb_70">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<hr class="mt-0">
                <div class="medium_divider clearfix"></div>
            </div>
        </div>
    	<div class="row">
        	<div class="col-lg-8">
                <div class="heading_s2">
                	<h4>About</h4>
                </div>
            	<div class="blog_article blog_grid_module">
                <?php
                    $sql = "SELECT * FROM `categories`,`about` WHERE about.category_id=categories.id AND city_id=$city_id";
                    $db->sql($sql);
                    $res = $db->getResult();
                    foreach($res as $value){
                ?>
                	<div class="blog_post">
                        <div class="blog_img">
                            <a href="#">
                            	<img src="<?php echo "admin/" .$value['image']; ?>" alt="blog_img1">
                            </a>
                        </div>
                        <div class="blog_content">
                        	<div class="blog_text">
                        		<div class="blog_tags">
                                    <a class="blog_tags_cat bg_blue" href="#"><?php echo $value['name']; ?></a>
                                </div>
                        		<h5 class="blog_heading"><a href="#"><?php echo $value['title']; ?></a></h5>
                               
                        		<p><?php echo $value['description']; ?> </p>
                        	</div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div id="accordion" class="kal">
                <?php
                            $sql = "SELECT DISTINCT name,category_id FROM `searchpage_accordians`,`categories` WHERE searchpage_accordians.category_id=categories.id AND city_id='$city_id' ORDER BY name,category_id";
                            $db->sql($sql);
                            $result = $db->getResult();
                            foreach ($result as $value) {
                        ?>
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <?php echo $value['name']; ?> <span class="accicon" id="accicon"><i class="fas fa-angle-up rotate-icon"></i></span>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <?php
                                $sql = "SELECT * FROM `searchpage_accordians` WHERE city_id='$city_id' AND category_id='$value[category_id]'";
                                $db->sql($sql);
                                $result = $db->getResult();
                            ?>
                            <p><?php echo $result[0]['description']; ?></p>
                            <div class="row">
                                <?php
                                    $sql = "SELECT * FROM `searchpage_accordians` WHERE city_id='$city_id' AND category_id='$value[category_id]'";
                                    $db->sql($sql);
                                    $result = $db->getResult();
                                    foreach($result as $value){
                                ?>
                                <div class="col-lg-4">
                                   <div class="card card-bod">
                                    <img src="<?php echo "admin/" .$value['image']; ?>" class="img-fluid" alt="">
                                    <div class="temple-name">
                                        <h6 class="color p-3"><?php echo $value['area_name']; ?></h6>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                         </div>  
                      </div>
                    </div>
                </div>
                 <?php } ?>


                </div>
            </div>
            <div class="col-lg-4">
            	<div class="sidebar">
                    <div class="widget">
                        <h5 class="widget_title">Map</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.25176871577!2d78.40804555!3d17.4123487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana%2C%20India!5e0!3m2!1sen!2suk!4v1659194535324!5m2!1sen!2suk" 
                        width="100%" height="250" style="border:2px solid #ddd;padding: 10px;" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Categories</h5>
                        <ul class="widget_categories">
                        <?php
                        $sql = "SELECT * FROM `categories`";
                        $db->sql($sql);
                        $result = $db->getResult();
                        foreach ($result as $value) {
                        ?>
                        	<li><a href="#<?php $value['id']; ?>"><div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img1.jpg"><div class="post_category"><span class="cat_title"><?php echo $value['name'] ?></span><span 
                                    class="cat_num" id=<?php echo $value['id']; ?>> <?php
                        $sql = "SELECT * FROM `homefeatured_posts` WHERE category_id= $value[id]";
                        $db->sql($sql);
                        $result = $db->getResult();
                        $num = $db->numRows($result);
                        foreach ($result as $value) { 
                            echo $num;
                        }
                        ?> Post</span></div></div></a></li>
                            <?php } ?>  
                        </ul>
                    </div>
                    <!-- <div class="widget">
                    	<h5 class="widget_title">Subscribe Newsletter</h5>
                        <p>Contrary to popular belief of lorem Ipsm Latin from consectetur industry blandit massa enim varius nunc.</p>
                        <div class="newsletter_form">
                            <form> 
                                <input type="text" required="" class="form-control form-control-sm rounded-input" placeholder="Your email address..">
                                <button type="submit" title="Subscribe" class="btn btn-default btn-radius btn-sm" name="submit" value="Submit">subscribe</button>
                            </form>
                        </div>
                    </div> -->
                	<div class="widget">
                    	<h5 class="widget_title">Social Feed</h5>
                        <ul class="widget_social social_icons rounded_social">
                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#" class="sc_pinterest"><i class="ion-social-pinterest-outline"></i></a></li>
                    	</ul>
                    </div>
                </div>
        </div>
    </div>
</div>


<!-- START Gallery-->
<section class="gal">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading_s2">
                	<h4>Gallery</h4>
                </div>
            </div>
            <?php
                $sql = "SELECT * FROM `searchgallery` WHERE city_id='$city_id'";
                $db->sql($sql);
                $result = $db->getResult();
                foreach ($result as $value) {
            ?>
            <div class="col-lg-4">
                <img src="<?php echo "admin/" .$value['image']; ?>" alt="" class="img-fluid">
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- END Gallery -->


<!-- START FOOTER SECTION --> 
<footer class="footer_dark background_bg overlay_bg_80" data-img-src="assets/images/footer_bg.jpg">
	<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="widget">
                        <h6 class="widget_title">About Us</h6>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                    <!-- <div class="widget">
                    	<h6 class="widget_title">Popular Tag</h6>
                        <div class="tags">
                        	<a href="#">General</a>
                            <a href="#">Design</a>
                            <a href="#">jQuery</a>
                            <a href="#">Branding</a>
                            <a href="#">Modern</a>
                            <a href="#">Blog</a>
                            <a href="#">Quotes</a>
                            <a href="#">Schools</a>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="col-xl-2 col-md-6 col-sm-5">
                    <div class="widget">
                    	<h6 class="widget_title">Useful Links</h6>
                        <ul class="widget_links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">Support center</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Life Style</a></li>
                            <li><a href="#">Church</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                            	<i class="ti-location-pin"></i>
                            	<p>123 Street,Madhapur,Hyderabad</p>
                            </li>
                            <li>
                            	<i class="ti-email"></i>
                            	<a href="mailto:info@sitename.com">info@kaalgyaan.com</a>
                            </li>
                            <li>
                            	<i class="ti-mobile"></i>
                            	<p>+91 987654321</p>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="widget">
                        <ul class="widget_social social_icons rounded_social">
                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#" class="sc_pinterest"><i class="ion-social-pinterest-outline"></i></a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-xl-4 col-md-6 col-sm-5">
                    <div class="widget">
                    	<h6 class="widget_title">Social Media</h6>
                        <div class="widget">
                            <ul class="widget_social social_icons rounded_social">
                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                <li><a href="#" class="sc_pinterest"><i class="ion-social-pinterest-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row align-items-center">
            	<div class="col-md-4">
                	<p class="copyright m-md-0 text-center text-md-left">© 2022 All Rights Reserved By <a href="index.php" class="text_default">KAALGYAAN.</a></p>
                </div>
                <div class="col-lg-4">
                    <p class="m-md-0 text-center text-md-left">Designed by <a href="https://designcomm.in/" class="text_default" target="_blank">Designcomm</a></p>
                </div>
                <div class="col-md-4">
                	<ul class="list_none footer_link text-center text-md-right">
                    	<li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER SECTION --> 


<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="assets/js/jquery-1.12.4.min.js"></script> 
<!-- Latest compiled and minified Bootstrap --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="assets/js/waypoints.min.js"></script> 
<!-- imagesloaded js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="assets/js/isotope.min.js"></script>
<!-- jquery.appear js  -->
<script src="assets/js/jquery.appear.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="assets/js/jquery.parallax-scroll.js"></script>
<!-- jquery.dd.min Js -->
<script src="assets/js/jquery.dd.min.js"></script>
<!-- scripts js --> 
<script src="assets/js/scripts.js"></script>



</body>
</html>