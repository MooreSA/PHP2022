<?php
//configure php.ini
// echo ini_get('SMTP');	
ini_set('SMTP','myserver');
ini_set('smtp_port',25);
// echo ini_get('SMTP');


//Check if the form is submitted and complete
if (($_POST['sender_name'] == "") || ($_POST['sender_email'] == "") || ($_POST['message'] == "")) {
        header("Location: simpleForm.html");
        exit;
}
 function sendMail($to, $msg) {
    $msg = "E-MAIL SENT FROM \"it.nscctruro.ca\"\n";
    $msg .= "Sender's E-Mail:\t$_POST[sender_email]\n";
    $msg .= "Message:\t$_POST[message]\n";
    $to = "matt@nscctruro.ca";
    $subject = "Web Site Feedback";
    $mailheaders = "From: My Web Site <webmaster@nscctruro.ca>\n";
    $mailheaders .= "Reply-To: $_POST[sender_email]\n";
    mail($to, $subject, $msg, $mailheaders);
 }

 sendMail($_POST['sender_email'], $_POST['message']);

 // check out  https://github.com/PHPMailer/PHPMailer

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Simple Feedback Form Sent</title>
    </head>
    <body>
        <h1>The following e-mail has been sent:</h1>
        <p><strong>Your Name:</strong><br>
        <?php echo "$_POST[sender_name]"; ?>
        <p><strong>Your E-Mail Address:</strong><br>
        <?php echo "$_POST[sender_email]"; ?>
        <p><strong>Message:</strong><br>
        <?php echo "$_POST[message]"; ?>
    </body>
</html>