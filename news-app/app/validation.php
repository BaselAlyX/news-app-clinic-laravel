<?php
function required($input){
    if(!empty($input)){
        return true;
    }return false;

}

function mininput($input, $length){
    if(strlen($input)>$length){
        return true;
    }return false;
}