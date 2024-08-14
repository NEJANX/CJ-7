<?php
include("../assets/php/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $membership_id = $_POST["member"];

    // Delete the club
    $stmt = $conn->prepare("DELETE FROM memberships WHERE id = ?");
    $stmt->bind_param("i", $membership_id);
    if ($stmt->execute() === TRUE) {
        header("Location: ./manage_members.php?status=member-remove-success");
    } else {
        header("Location: ./manage_members.php?status=member-remove-error");
    }
    $stmt->close();
}else{
    header("Location: ./manage_members.php");
}
?>