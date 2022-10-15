<?php
	// start session
	
	session_start();
  // set time for session timeout
	
    // set time for session timeout
    $currentTime = time() + 25200;
    $expired = 900;

    // if current time is more than session timeout back to login page
    if ($currentTime > $_SESSION['timeout']) {
        session_destroy();
        header("location:index.php");
    }
    // destroy previous session timeout and create new one
    unset($_SESSION['timeout']);
    $_SESSION['timeout'] = $currentTime + $expired;
	
	
	
?>
<?php include "header.php";?>
<html>
<head>
<title>Add City | - Dashboard</title>
</head>
</body>
        <?php include('public/add-city-form.php'); ?>
  </body>
</html>
<?php include "footer.php"; ?>

