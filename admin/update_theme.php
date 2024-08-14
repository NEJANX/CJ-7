<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the color scheme from the POST data
    $colorScheme = isset($_POST['colorScheme']) ? $_POST['colorScheme'] : '';

    // Use the colorScheme variable as needed (store in a database, session, etc.)
    // For example, you can store it in a session variable:
    session_start();
    $_SESSION['colorScheme'] = $colorScheme;

    // You can also echo a response if needed
    echo 'Color scheme updated successfully.';
} else {
    // Handle invalid requests
    header('HTTP/1.1 400 Bad Request');
    echo 'Invalid request.';
}
?>