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
}
