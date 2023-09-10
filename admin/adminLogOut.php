<?php
session_start();  // Starting the session

function session_clear()
{
    // Initialize variable to check if any session variables exist
    $exists = "no";

    // Get all session variables and explode them into an array
    $session_array = explode(";", session_encode());

    // Iterate through the session variables
    for ($x = 0; $x < count($session_array); $x++) {
        // Get the name of each session variable
        $name  = substr($session_array[$x], 0, strpos($session_array[$x], "|"));

        // Check if the session variable is registered and unregister it
        if (session_is_registered($name)) {
            session_unregister('$name');
            $exists = "yes";
        }
    }

    // Destroy session if any session variables were registered
    if ($exists != "no") {
        session_destroy();
    }
}

// Call the function to clear the session
session_clear();

// Deprecated function check; not really doing anything here
if (!session_is_registered(session_name())) {
}

// Unset a specific session variable if it exists
// if (isset($_SESSION['basic_is_logged_in'])) {
//     unset($_SESSION['basic_is_logged_in']);
// }

if (isset($_SESSION[$name])) {
    unset($_SESSION[$name]);
    $exists = "yes";
}
?>
<?php
// Include the admin login form HTML
include("adminLoginForm.php");
?>
