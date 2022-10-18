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
$city= $db->escapeString($_GET['city']);
$sql_query="SELECT * FROM cities WHERE name='$city' OR pincode='$city'";
$db->sql($sql_query);
$res = $db->getResult();
$num = $db->numRows($res);
if($num>=1){
    $city_id = $res[0]['id'];
    $_SESSION['city_id'] = $city_id;
    header("location: searchpage.php");
}else{
    echo '<script>alert("Data Not Found");window.location = "index.php";</script>';
}
?>
