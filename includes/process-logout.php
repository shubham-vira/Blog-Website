<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 20-01-2019
 * Time: 20:47
 */
session_start();
$_SESSION['user_id'] = null;
$_SESSION['role'] = null;
session_unset();
header("Location: ../index.php");