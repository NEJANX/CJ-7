<?php
// Start the session
session_start();

// Remove existing session variable (replace 'old_variable' with the actual variable name)
unset($_SESSION['old_variable']);

// Set new session variables
$_SESSION['new_variable_1'] = 'value1';
$_SESSION['new_variable_2'] = 'value2';
$_SESSION['new_variable_3'] = 'value3';

// Echo a response if needed
echo "Session variables updated successfully!";
?>