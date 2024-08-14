<?php

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}

if (isset($_SESSION['username'])) {
    $user_name = $_SESSION['username'];
}

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}

if (isset($_SESSION['userAvatar'])) {
    $user_avatar = $_SESSION['userAvatar'];
}

if (isset($_SESSION['userClubId'])) {
    $userClubId = $_SESSION['userClubId'];
}

if (isset($_SESSION['userRole'])) {
    $userRole = $_SESSION['userRole'];
}

if (!isset($_SESSION['user_id'])) {
    header("Location: ../");
}

if (isset($_SESSION['ADMIN']) && $_SESSION['ADMIN'] == "ADMIN") {
  
}else  {
  header("Location: ../");
}