<?php

session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();

// Redirect to login.php
Header("Location: ../../login.php");
?>
