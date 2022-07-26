<?php
// variable setting
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$subject = $_REQUEST['Subject'];
$message = $_REQUEST['Message'];

// check input fields
if (empty($name) || empty($email) || empty($subject) || empty($message))
{
  echo "Please Fill All Fields";
}
else
{
  mail("silascyrax@gmail.com", "Portfolio Message", $message, $subject, "from: $name <$email>");
  echo "<string type='text/javascript'>alert('Your Message Was Sent Successfully.');
      window.history.log(-1);
  </script>";
}
?>
