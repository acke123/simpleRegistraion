<?php
session_start();
if (isset($_POST['inputValue'])) {
    $_SESSION['firstName'] = $_POST['inputValue'];
} else if (!isset($_SESSION['firstName'])){
    $_SESSION['inputValue'] = '';
}

if (isset($_POST['inputEmail'])) {
    $_SESSION['inputEmail'] = $_POST['inputEmail'];
} elseif (!isset($_SESSION['inputEmail'])){
    $_SESSION['inputEmail'] = '';
}

if (isset($_POST['step4'])) {
    session_destroy();
}

$value = json_encode($_SESSION);
echo $value;