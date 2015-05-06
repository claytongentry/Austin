<?php

  // Require PHPMailer
  require('PHPMailerAutoload.php');
  require('class.smtp.php');
  require('class.pop3.php');
  require('class.phpmailer.php');

  // Validate submission
  if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["msg"])) {

    // Instantiate mailer
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPSecure = "tls";
    $mail->Host = "tls://smtp.gmail.com";
    $mail->SMTPAuth = true;
    echo "Made it all the way to declaring username, password\n\n";
    $mail->Username = ENV['mail_username'];
    echo ENV['mail_username'];
    $mail->Password = ENV['mail_pw'];
    echo ENV['mail_pw'];
    echo "Username, password declared\n";
    echo "Username is ".$mail->Username;
    echo "Password is ".$mail->Password;
    $mail->Port = 587;

    // Set from
    $fromname = $_POST["name"];
    $fromaddress = $_POST["email"];
    $mail->SetFrom($fromaddress, $fromname);

    // Validate email
    if (strstr($fromaddress, '@') == false) {
      header("Location: http://claytongentry.com/includes/apologize.php");
      exit;
    }

    // Set to
    $mail->AddAddress("claytongentry2017@u.northwestern.edu");

    // Set body
    $mail->Body = $_POST["msg"]."\n\n"."Reply: ".$_POST["email"];

    // Send mail
    if ($mail->Send() == false) {
        die($mail->ErrorInfo);
        header("Location: https://austin-curzon.herokuapp.com/apologize.php");
    }
  }
  // } else {
  //   header("Location: http://claytongentry.com/includes/apologize.php");
  //   exit;
  // }
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
        <a href = "../Austin"><p>Home</p></a>
    </div>
  </body>
</html>
