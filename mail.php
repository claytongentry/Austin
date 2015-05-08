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
    $mail->Username = getenv('mail_username');
    $mail->Password = getenv('mail_pw');
    $mail->Port = 587;

    // Set from
    $fromname = $_POST["name"];
    $fromaddress = $_POST["email"];
    $mail->SetFrom($fromaddress, $fromname);

    // Validate email
    if (strstr($fromaddress, '@') == false) {
      header("Location: https://austin-curzon.herokuapp.com/apologize.php");
      exit;
    }

    // Set to
    $mail->AddAddress("austinwcurzon@gmail.com");

    // Set body
    $mail->Body = $_POST["msg"]."\n\n"."Reply: ".$_POST["email"];

    // Send mail
    if ($mail->Send() == false) {
        die($mail->ErrorInfo);
        header("Location: https://austin-curzon.herokuapp.com/apologize.php");
    }
  } else {
    header("Location: https://austin-curzon.herokuapp.com/apologize.php");
    exit;
  }
?>


<?php require('templates/header.php'); ?>
    <div id = "main" style = "text-align: center;">
        <h1>Thanks!</h1>
        <br/>
        <a href = ".."><p>Home</p></a>
    </div>
<?php require('templates/fooder.php'); ?>
