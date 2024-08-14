<?php

include('../assets/php/dbcon.php');

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT club_id FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($club_id);

    // Fetch the result
    if ($stmt->fetch()) {
        // No need to reassign $club_id as it's already bound
        $stmt->close();

        $sql1 = "SELECT shortcode FROM clubs WHERE id = ?";
        $stmt1 = $conn->prepare($sql1); // Change to $sql1
        $stmt1->bind_param("i", $club_id);
        $stmt1->execute();
        $stmt1->bind_result($club_name);

        if ($stmt1->fetch()) {
            $_SESSION['club_name'] = $club_name; // Correct the syntax and remove the semicolon
        } else {
            session_destroy();
            header("Location: ../");
            exit();
        }
        $stmt1->close();

    } else {
        session_destroy();
        header("Location: ../");
        exit();
    }
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
    // $userRole = $_SESSION['userRole']; 
    $userRole = "Club Manager";
}

if (!isset($_SESSION['user_id'])) {
    header("Location: ../");
    exit();
}

if (!isset($_SESSION['club_manager']) || $_SESSION['club_manager'] != "club_manager") {
    header("Location: ../");
    exit();
}
?>
