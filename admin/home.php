<?php session_start();

include_once('includes/custom-functions.php');
include_once('includes/functions.php');
$function = new custom_functions;

// set time for session timeout
$currentTime = time() + 25200;
$expired = 3600;
// if session not set go to login page
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}
// if current time is more than session timeout back to login page
if ($currentTime > $_SESSION['timeout']) {
    session_destroy();
    header("location:index.php");
}
// destroy previous session timeout and create new one
unset($_SESSION['timeout']);
$_SESSION['timeout'] = $currentTime + $expired;
$function = new custom_functions;
$_SESSION['menu'] = '0';
include "header.php";
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>kaalgyaan - Dashboard</title>
</head>

<body>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <h4><i class="fa fa-home"></i>Home</h4><br>
            <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="sale-details">
                                <h2><?php
                                    $sql = "SELECT * FROM categories";
                                    $db->sql($sql);
                                    $res = $db->getResult();
                                    $num = $db->numRows($res);
                                    echo $num;
                                    ?></h2>
                                <p>Categories</p>
                            </div>
                            <div class="sale-graph">
                                <a href="categories.php">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                   <img src="upload/home/gallery.png" height="20"></img>                            </div>
                            <div class="sale-details">
                                <h2><?php
                                    $sql = "SELECT * FROM homegallery";
                                    $db->sql($sql);
                                    $res = $db->getResult();
                                    $num = $db->numRows($res);
                                    echo $num;
                                    ?></h2>
                                <p>Gallery</p>
                            </div>
                            <div class="sale-graph">
                                <a href="homegallery.php">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                <img src="upload/home/trending.png" height="20"></img>
                            </div>
                            <div class="sale-details">
                                <h2><?php
                                    $sql = "SELECT * FROM hometrending_posts";
                                    $db->sql($sql);
                                    $res = $db->getResult();
                                    $num = $db->numRows($res);
                                    echo $num;
                                    ?></h2>
                                <p>Trending Posts</p>
                            </div>
                            <div class="sale-graph">
                                <a href="hometrending-posts.php">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                <img src="upload/home/feature.png" height="20"></img>
                            </div>
                            <div class="sale-details">
                                <h2><?php
                                    $sql = "SELECT * FROM homefeatured_posts";
                                    $db->sql($sql);
                                    $res = $db->getResult();
                                    $num = $db->numRows($res);
                                    echo $num;
                                    ?></h2>
                                <p>Featured Posts</p>
                            </div>
                            <div class="sale-graph">
                                <a href="homefeatured-posts.php">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

            </div>
      
    </div>
 <?php include "footer.php"; ?>
</body>
</html>