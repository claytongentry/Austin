<?php

    // Ensure form filled out correctly
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["msg"])) {

        // Collect info
        $to = "austinwcurzon@gmail.com";
        $subject = "Excuse me! New message: ".$_POST["name"];
        $message = $_POST["msg"];
        $message = wordwrap($message, 70, "\r\n");
        $headers = "Reply to: ".$_POST["email"];

        // Validate mail and send w/ success check
        if (strstr($_POST["email"], '@') == false) || ((mail($to, $subject, $message, $headers) == false)  {

            header("Location: ~http://awcurzon.com/apologize.php");
            exit;

        }

?>

<!DOCTYPE html>
<html>
  <head>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
    <link type = "text/css" rel = "stylesheet" href = "../styles/email.css"/>
    <title>Thanks!</title>
  </head>
  <body>
    <div id = "main">
        <h4>Thanks!</h4>
        <p>I check my email multiple times a day. Expect a response pretty soon.</p>
        <br/>
        <a href = "../"><p>Home</p></a>
    </div>
  </body>
</html>
