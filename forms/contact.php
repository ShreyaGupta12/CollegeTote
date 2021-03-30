<?php
  $toEmail = 'collegetote@example.com';
  $mailHeaders = "From: " . $_POST['name'] ."<". $_POST['email'] .">\r\n";
$details="Name : ".$_POST["firstname"]."\n"."Email : ".$_POST["email"]."\n"."Subject : + ".$_POST['subject']."\n"."Messege : ".$_POST['message']."\n";
if(mail($toEmail, $mailHeaders, $details)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>
