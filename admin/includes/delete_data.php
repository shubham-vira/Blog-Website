<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 27-12-2018
 * Time: 15:06
 */
include_once ("admin_functions.php");
if (isset($_GET['cat_id'])){
    $cat_id = $_GET['cat_id'];
    delete("categories", "cat_id = $cat_id");
    header("Location: ../categories.php");

}