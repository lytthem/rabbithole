<?php
  $story = $_POST['story']);
  $visitorEmail = $_POST['email'];

  $emailFrom = "EasyTutorials@avinashkr.com";
  $email_subject = "New Form Submission";
  $email_body = "User email: $visitorEmail.\n".
                "User Message: $story.\n";

  $emailTo = "1800howareyou@gmail.com";

  $headers = "From: $emailFrom \r\n";
  $headers .= "Reply-To: $visitorEmail \r\n";

  mail($emailTo, $email_subject, $email_body, $headers);
  header("Location: text.html");

?>
