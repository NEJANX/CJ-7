<?php

include("../assets/php/dbcon.php");

// Function to fetch latest data from the database
function fetchData($conn) {
    $result = $conn->query("SELECT * FROM leaves ORDER BY id DESC LIMIT 1");
    
    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// Server-sent events (SSE) setup
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');

// Loop to check for updates
while (true) {
    $latestData = fetchData($conn);

    if ($latestData !== null) {
        // Send data to the client
        echo "data: " . json_encode($latestData) . "\n\n";
        ob_flush();
        flush();
        // Log the data for debugging
        error_log("Sent data: " . json_encode($latestData));
    }

    // Sleep for a short duration before checking again
    sleep(1);
}
?>
