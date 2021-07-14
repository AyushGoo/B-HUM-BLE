<?php
$to_email = "ayushk.it@sbjit.edu.in";
$subject = "Hi,From Team B_HUM_BLE" ;
$body = "Your request has been approved ......
Please contact to Team B_HUM_BLE for the further process.                                   
Wish you Best Of Luck For Your Future,Kindly Response on Approval,

Regards,
     *B_HUM_BLE*";
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