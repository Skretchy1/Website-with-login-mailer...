<?php

include 'db_connnection.php';

$conn = OpenCon();


// $sender = 'heylolwait555@gmail.com';
// $recipient = 'jovcekokovce@gmail.com';

// $subject = "php mail test";
// $message = "php test message";
// $headers = 'From:' . $sender;

// if (mail($recipient, $subject, $message, $headers))
// {
//     echo "Message accepted";
// }
// else
// {
//     echo "Error: Message not accepted";
// }







CloseCon($conn);

?>