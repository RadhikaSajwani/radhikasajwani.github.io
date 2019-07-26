<?php

    $to = "sajwaniradhika0@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['fname'];

    $subject = "Form submission";

    $message = $fname . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.

?>
