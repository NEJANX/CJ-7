<?php
include("../assets/php/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $manager_id = $_POST["manager"];

    // Delete the club
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $manager_id);
    if ($stmt->execute() === TRUE) {
        header("Location: ./manage_club_managers.php?status=manager-remove-success");
    } else {
        header("Location: ./manage_club_managers.php?status=manager-remove-error");
    }
    $stmt->close();
}else{
    header("Location: ./manage_club_managers.php");
}
?>