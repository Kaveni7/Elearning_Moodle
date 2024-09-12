<?php
// Include Moodle config file
require_once(__DIR__ . '/config.php');

// Check if the user is logged in
if (!isloggedin()) {
    // Redirect to the custom landing page if not logged in
    header('Location: /static/tinytotos.html');
    exit();
}

// If the user is logged in, continue with the rest of the Moodle index page logic
require_once($CFG->dirroot . '/index.php');
?>
