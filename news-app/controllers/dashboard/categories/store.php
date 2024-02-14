<?php
require_once('../../../app/config.php');
$errors = [];

if (checkmethod('POST')) {
    $name = postinput('name');

    if (!required($name)) {
        $errors[] = 'Please enter a name as it is required';
    }

    if (!mininput($name, 3)) {
        $errors[] = 'Name must be greater than 3 characters';
    }

    if (empty($errors)) {
        dbinsert('categories', ["name" => $name]);
        setsession("success", "Data inserted successfully");
    } else {
        setsession("errors", $errors);
    }
} 
else {
    echo "7amra el3ab b3eed";
}

header('location:'.URL.'views/dashboard/categories/add.php');