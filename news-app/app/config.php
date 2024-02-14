<?php
session_start();
define("MAIN_PATH",dirname(dirname(__FILE__)));
define("URL","http://127.0.0.1/news-app/");
require_once MAIN_PATH.'../app/request.php';
require_once MAIN_PATH.'../app/db.php';
require_once MAIN_PATH.'../app/session.php';
require_once MAIN_PATH.'../app/validation.php';

