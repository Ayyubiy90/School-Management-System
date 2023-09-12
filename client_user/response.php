<?php
if ($_REQUEST['submit']) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['Country'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    $comment = $_POST['comments'];
    $from = "ayyubiy67@gmail.com";

    // Set Message for E-mail Content //
    // To send HTML mail, you can set the Content-type header.
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=1so-8859-1\r\n";

    // Additional headers
    $headers .= "From: $from\r\n";
    // $headers .= "Cc: ".$cc. "\r\n";
    // $headers .= "Bcc: \r\n";

    $msg = "";
    $msg .= "Firstame   : $fname<br />";
    $msg .= "Lastame   : $lname<br />";
    $msg .= "Gender   : $gender<br />";
    $msg .= "Age   : $age<br />";
    $msg .= "City   : $city<br />";
    $msg .= "State   : $state<br />";
    $msg .= "Country   : $country<br />";
    $msg .= "Phone   : $phone<br />";
    $msg .= "Fax   : $fax<br />";
    $msg .= "Email   : $email<br />";
    $msg .= "Comment   : $comment<br />";

    $to = "ayyubiy67@gmail.com";
    $sub = "Feedback Sent from Website scem.com"; // Set Mail Subject 

    @mail($to, $sub, $msg, $headers);

    echo "Your feedback has been sent. We will get back to you soon.....";
}
