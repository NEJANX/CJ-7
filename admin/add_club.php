<?php
include("../assets/php/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['club_name']);
    $shortcode = htmlspecialchars($_POST['club_shortcode']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO clubs (name, shortcode) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $shortcode);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ./manage_clubs.php?status=club-add-success");
    } else {
        header("Location: ./manage_clubs.php?status=club-add-error");
    }

    // Close the statement and connection
    $stmt->close();
}else{
    header("Location: ./manage_clubs.php");
}



?>
