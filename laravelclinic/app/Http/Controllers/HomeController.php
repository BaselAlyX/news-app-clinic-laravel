<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 function home(){
$doctors=[
['image'=>'assets/images/major.jpg',
'title'=>'doctor1',
'url'=>'/'],
['image'=>'assets/images/major.jpg',
'title'=>'doctor2',
'url'=>'/'],
['image'=>'assets/images/major.jpg',
'title'=>'doctor3',
'url'=>'/'],
['image'=>'assets/images/major.jpg',
'title'=>'doctor4',
'url'=>'/']
];
$title="Home page";
return view('pages/home',['doctors'=>$doctors],['title'=>$title]);
}
}