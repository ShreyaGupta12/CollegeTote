<?php
$toEmail = "sushrutnagula@gmail.com";
$mailHeaders = "From: " . $_POST["firstname"] ." ".$_POST["lastname"]. "<". $_POST["email"] .">\r\n";
$details="Name : ".$_POST["firstname"]." ".$_POST["lastname"]."\n"."Email : ".$_POST["email"]."\n"."Phone no. : + ".$_POST["countryCode"]."  ".$_POST["telephone"]."\n"."Messege : ".$_POST["subject"]."\n";
if(mail($toEmail, $mailHeaders, $details)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>