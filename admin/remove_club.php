<?php
include("../assets/php/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $club_id = $_POST["club"];

    // Check if there are any users associated with the club
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE club_id = ?");
    $stmt->bind_param("i", $club_id);
    $stmt->execute();
    $stmt->bind_result($user_count);
    $stmt->fetch();
    $stmt->close();

    if ($user_count > 0) {
        // Delete users associated with the club
        $stmt = $conn->prepare("DELETE FROM users WHERE club_id = ?");
        $stmt->bind_param("i", $club_id);
        if ($stmt->execute() !== TRUE) {
        header("Location: ./manage_clubs.php?status=club-remove-error");
        }
        $stmt->close();
    }

    // Delete the club
    $stmt1 = $conn->prepare("DELETE FROM clubs WHERE id = ?");
    $stmt1->bind_param("i", $club_id);
    if ($stmt1->execute() === TRUE) {
        header("Location: ./manage_clubs.php?status=club-remove-success");
    } else {
        header("Location: ./manage_clubs.php?status=club-remove-error");
    }
    $stmt1->close();
}else{
    header("Location: ./manage_clubs.php");
}
?>