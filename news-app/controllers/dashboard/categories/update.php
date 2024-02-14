<?php
require_once('../../../app/config.php');
$errors = [];
$row=dbrow("categories","id",getinput('id'));
if(!$row){
    die("category not found");}
if (checkmethod('POST')) {
    $name = postinput('name');

    if (!required($name)) {
        $errors[] = 'Please enter a name as it is required';
    }

    if (!mininput($name, 3)) {
        $errors[] = 'Name must be greater than 3 characters';
    }

    if (empty($errors)) {
        dbupdate('categories', ["name" => $name],$row['id']);
        setsession("success", "Data Updated successfully");
    } else {
        setsession("errors", $errors);
    }
} 
else {
    echo "7amra el3ab b3eed";
}

header('location:'.URL.'views/dashboard/categories/edit.php?id='.$row['id']);