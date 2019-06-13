<?php
session_start();
include_once('dbconfig.php');
include_once('header.php');
if(isset($_GET['page']) && $_GET['page'] != ''){
    $pages = ['login', 'signup', 'home', 'admin_login', 'admin', 'admin_personeel'];
    if(in_array($_GET['page'], $pages)){
        include_once($_GET['page'].'.php');
    } else {
        include_once('404.php');
    }
} else {
    include_once('home.php');
}
include_once('footer.php');
?>