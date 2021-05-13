<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        require_once 'include/login.php';
    }
    else {
        require_once 'include/header.php';
        require_once 'include/header_sub.php';
        require_once 'include/content.php';
        require_once 'include/footer.php';
    }
?>