<?php
include("../assets/php/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['manname123']);
    $username = htmlspecialchars($_POST['manuname123']);
    $password = htmlspecialchars($_POST['manpsw123']);
    $club_id = htmlspecialchars($_POST['club']);
    $role = 'club_manager';
    $hashedpass = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (name, username, password, club_id, role) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $name, $username, $hashedpass, $club_id, $role);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ./manage_club_managers.php?status=manager-add-success");
    } else {
        header("Location: ./manage_club_managers.php?status=manager-add-error");
    }

    // Close the statement and connection
    $stmt->close();
}else{
    header("Location: ./manage_club_managers.php");
}
?>