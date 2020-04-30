<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 26-12-2018
 * Time: 11:22
 */
include_once ("config.php");
$connection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);

if($connection){
//    echo "Connection Established Successfully";
 }else{
    die(mysqli_connect_error("$connection"));
}