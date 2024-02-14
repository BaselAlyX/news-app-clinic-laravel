<?php


function checkmethod( $methodname){
    if($_SERVER['REQUEST_METHOD']==$methodname ) {return true;}
    return false;
}

function postinput($name){
    return trim(htmlentities(htmlspecialchars($_POST[$name])));
}
function getinput($name){
    return trim(htmlentities(htmlspecialchars($_GET[$name])));
}
