<?php

session_start();

$_SESSION['darkmode'] = "true";

header("Location: ./");

?>