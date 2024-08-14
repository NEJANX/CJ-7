<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect or perform any other necessary actions
header("Location: ../");
exit();
?>