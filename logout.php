<?php
// Start or resume the session.
session_start();

// Unset all session variables.
session_unset();

// Destroy the session.
session_destroy();

// Redirect the user to the login page after logout.
header("Location: ../index.php");
exit;
?>
