<?php
session_start();

// 모든 에러메세지를 리포팅 하도록 설정하는 곳
//error_reporting(E_ALL);
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
@ini_set("display_errors", 1);
define('URL', 'https://www.nidlu.com/');

// DB setting
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3306');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', '');

// site
define('SITE_NAME', 'nidlu');
define('SITE_VERSION', 'V001');

//time
date_default_timezone_set('Asia/Seoul');
?>