<?php
// Check if the 'secret.php' file exists
if (file_exists("secret.php")) {
    // Include the 'secret.php' file if it exists
    require_once("secret.php");
}

// Retrieve 'formuser' and 'formpassword' from POST data, set to NULL if not set
$formuser = !isset($_POST['formuser']) ? NULL : $_POST['formuser'];
$formpassword = !isset($_POST['formpassword']) ? NULL : $_POST['formpassword'];

// Check if the user credentials match the admin credentials
if (($formuser != ADMINUSER) || ($formpassword != ADMINPASSWORD)) {
    // Include the admin login form if credentials don't match
    include("adminLoginForm.php");
    exit();  // Stop further execution of the script
}

// Check if user credentials match admin credentials to start a session
if (($formuser == ADMINUSER) && ($formpassword == ADMINPASSWORD)) {
    session_start();  // Start a new session
    $_SESSION['basic_is_logged_in'] = true;  // Set session variable for login status
    $_SESSION['adminUser'] = ADMINUSER;  // Store the admin user in session
    $_SESSION['adminPassword'] = ADMINPASSWORD;  // Store the admin password in session
    $SID = session_id();  // Store the session ID
    $adminHome = ADMINHOME;  // Define the admin home page
    include($adminHome);  // Include the admin home page
}
?>