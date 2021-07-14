<?php
$to_email = "ayushk.it@sbjit.edu.in";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From:ayushkaithe80340@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
   // echo "Email successfully sent to $to_email...";
	echo '<script>alert("Email successfully sent to $to_email...");
	window.location="AdminPage.php";
	</script>';
	
} else {
    echo "Email sending failed...";
}
?>