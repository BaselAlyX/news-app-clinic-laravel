<?php
require_once('../../../app/config.php');
$errors = [];
$row=dbrow("categories","id",getinput('id'));
if(!$row){
    die("category not found");}
if (checkmethod('GET')) {
    $name = getinput('id');
 
        dbdelete('categories', $row['id']);
        setsession("success", "Data Deleted successfully");
    } 
 
else {
    echo "7amra el3ab b3eed";
}

header('location:'.URL.'views/dashboard/categories/index.php?id='.$row['id']);