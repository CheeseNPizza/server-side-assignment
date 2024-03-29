<?php
session_start();
$timeout_duration = 99999;

if (!isset($_SESSION['customer_name']) || (time() - $_SESSION['last_timestamp']) > $timeout_duration) {
    session_unset();
    session_destroy();
    header("Location: login.php?session_expired=1");
    exit();
} else {
    session_regenerate_id(true);
    $_SESSION['last_timestamp'] = time();
}
?>